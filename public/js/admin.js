const textAreas = document.getElementsByTagName('textarea');


// Function to replace /n with a new line in the placeholder
Array.prototype.forEach.call(textAreas, function(elem) {
  elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
});


// Function to change value in the input number fo sizes
window.onload = function() {
  const divs = document.querySelectorAll('[data-hs-input-number]');

  divs.forEach(div => {
    const input = div.querySelector('[data-hs-input-number-input]');
    div.querySelector('[data-hs-input-number-increment]').addEventListener('click', () => {
      input.value = Number(input.value) + 1;
    });

    div.querySelector('[data-hs-input-number-decrement]').addEventListener('click', () => {
      if(input.value >= 1) {
        input.value = Number(input.value) - 1;
      }
    });
  });
};

function loadFile(event, imgId) {
  // Get the image element
  const img = document.getElementById(imgId);
  // Set the image source to the file
  img.src = URL.createObjectURL(event.target.files[0]);
  // Revoke the object URL
  img.onload = function() {
    URL.revokeObjectURL(img.src);
  }
}
