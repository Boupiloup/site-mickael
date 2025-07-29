const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const rightButton = document.querySelector('.carousel-btn.right');
const leftButton = document.querySelector('.carousel-btn.left');

let currentIndex = 0;

function getSlideWidth() {
  const slide = slides[0];
  const style = window.getComputedStyle(slide);
  const marginRight = parseFloat(style.marginRight || 0);
  const gap = parseFloat(window.getComputedStyle(track).gap || 0);
  return slide.getBoundingClientRect().width + gap + marginRight;
}


function updateSlidePosition() {
  const slideWidth = getSlideWidth();
  const offset = currentIndex * slideWidth;
  track.style.transform = `translateX(-${offset}px)`;
  track.style.transition = 'transform 0.5s ease-in-out';
}

// Bouton droite
rightButton.addEventListener('click', () => {
  if (currentIndex < getMaxIndex()) {
    currentIndex++;
    updateSlidePosition();
  }
});


// Bouton gauche
leftButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSlidePosition();
  }
});

// Recalcul au redimensionnement
window.addEventListener('resize', updateSlidePosition);

function getMaxIndex() {
  const visibleCount = Math.floor(document.querySelector('.carousel-track-container').offsetWidth / getSlideWidth());
  return slides.length - visibleCount;
}