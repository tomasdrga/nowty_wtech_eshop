document.addEventListener('click', function(event) {
  const dropdownButton = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');

  if (event.target === dropdownButton) {
    dropdownMenu.classList.toggle('hidden');
  } else if (!dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden');
  }
});

function handlePriceChange(id) {
  var lowestPriceCheckbox = document.getElementById('checkbox-item-11');
  var highestPriceCheckbox = document.getElementById('checkbox-item-12');

  if (id === 'checkbox-item-11' && lowestPriceCheckbox.checked) {
    highestPriceCheckbox.checked = false;
  } else if (id === 'checkbox-item-12' && highestPriceCheckbox.checked) {
    lowestPriceCheckbox.checked = false;
  }
}
