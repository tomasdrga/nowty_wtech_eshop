document.addEventListener('click', function(event) {
  const dropdownButton = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');

  if (event.target === dropdownButton) {
    dropdownMenu.classList.toggle('hidden');
  } else if (!dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden');
  }
});
