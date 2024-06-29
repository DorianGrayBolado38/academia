let slideIndex = 0;

function moveSlide(n) {
  const slides = document.querySelectorAll('.slide');
  const slidesContainer = document.querySelector('.slides');
  const slideWidth = slides[0].clientWidth;
  
  slideIndex += n;
  
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  
  slidesContainer.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
}
