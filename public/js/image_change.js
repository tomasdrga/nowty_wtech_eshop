function handleImageClick(e) {
  const mainImage = document.querySelector('.main-image');
  mainImage.src = e.target.src;
}

const secondaryImages = document.querySelectorAll('.secondary-image');
secondaryImages.forEach(img => {
  img.addEventListener('click', handleImageClick);
});
