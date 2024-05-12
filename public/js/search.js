// JavaScript Debounce Function
const debounce = (func, delay) => {
  let timerId;
  return (...args) => {
    if (timerId) clearTimeout(timerId);
    timerId = setTimeout(() => {
      func(...args);
    }, delay);
  };
};

// Keep track of whether the mousedown event started on the results container
let clickingOnResults = false;

document.addEventListener('mouseup', function() {
  clickingOnResults = false;
});

let fetchVersion = 0;
let abortController = new AbortController();

const performSearch = (searchInput, resultsContainer, e) => {
  let inputVal = e.target.value.trim();
  if (abortController) abortController.abort(); // Abort previous fetch request

  if (!inputVal || inputVal.length === 0) {
    resultsContainer.innerHTML = '';
    resultsContainer.classList.add('hidden');
    return; // halting execution here, as the input is empty.
  }

  fetchVersion++;
  const currentFetch = fetchVersion;

  abortController = new AbortController();  // Creating new abort controller

  // Fetch data from your Laravel route which has a Search method
  fetch('/search?query=' + inputVal, {
    signal: abortController.signal,   // Passing abort signal to fetch
    headers: {
      'X-Requested-With': 'XMLHttpRequest'
    }
  })
    .then(response => {
      if (currentFetch !== fetchVersion) return;  // Ignore this response if a newer fetch has been made
      resultsContainer.classList.remove('hidden');
      return response.json();
    })
    .catch(err => {
      if (err.name === 'AbortError') {  // Aborted fetch is caught here
      } else {
        throw err;  // In case another error happened, it would be still thrown
      }
    })
    .then(products => {
      if (currentFetch !== fetchVersion) return;  // Ignore this response if a newer fetch has been made
      let productHtml = '';

      if (Array.isArray(products) && products.length >= 1) {
        productHtml = products.map(product => {
          const imageUrl = "/storage/uploads/" + product.main_image.name;

          return `
            <a href="/product/${product.slug}" class="grid grid-cols-2 gap-4 py-4 px-8">
              <div class="space-y-1">
                <div class="text-xs lg:text-sm font-semibold text-[#260065]">${product.name}</div>
                <div class="text-xs lg:text-sm text-[#260065]/50">\$${product.price}</div>
              </div>
              <div class="flex items-center justify-end">
                <img class="w-16 h-16 xl:w-20 xl:h-20 rounded-md object-contain" src="${imageUrl}" alt="${product.name}" />
              </div>
            </a>`;
        }).join('');
      } else {
        productHtml = '<div class="text-xs lg:text-sm text-center px-4 py-2">No results found</div>';
      }

      resultsContainer.innerHTML = productHtml;
    });
}

// Large screens search bar
document.querySelector('#searchForm').addEventListener('submit', function(e) { e.preventDefault(); });
let searchInputLarge = document.querySelector('#searchInput');
let resultsContainerLarge = document.querySelector('#results');
resultsContainerLarge.addEventListener('mousedown', function() { clickingOnResults = true; });
searchInputLarge.addEventListener('input', debounce(performSearch.bind(null, searchInputLarge, resultsContainerLarge), 50));
searchInputLarge.addEventListener('blur', function(e) {
  if (!clickingOnResults) {
    searchInputLarge.value = '';
    resultsContainerLarge.innerHTML = '';
    resultsContainerLarge.classList.add('hidden');
  }
});

// Small screens search bar
document.querySelector('#searchFormSmall').addEventListener('submit', function(e) { e.preventDefault(); });
let searchInputSmall = document.querySelector('#searchInputSmall');
let resultsContainerSmall = document.querySelector('#resultsSmall');
resultsContainerSmall.addEventListener('mousedown', function() { clickingOnResults = true; });
searchInputSmall.addEventListener('input', debounce(performSearch.bind(null, searchInputSmall, resultsContainerSmall), 50));
searchInputSmall.addEventListener('blur', function(e) {
  if (!clickingOnResults) {
    searchInputSmall.value = '';
    resultsContainerSmall.innerHTML = '';
    resultsContainerSmall.classList.add('hidden');
  }
});
