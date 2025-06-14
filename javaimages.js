const images = [];
for (let i = 1; i <= 12; i++) {
  images.push(`image(${i}).jpg`);
}

let currentIndex = 0;
const header = document.getElementById('slideshow-header');

function changeBackground() {
  header.style.backgroundImage = `url('${images[currentIndex]}')`;
  currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackground, 5000);
changeBackground(); // start immediately
