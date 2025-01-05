// Agrega una clase al header cuando se hace scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) { // Cambia 50 a la cantidad de scroll deseada
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});


let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-item');
const indicators = document.querySelectorAll('.indicator');

function showSlide(index) {
    const carouselContainer = document.querySelector('.carousel-container');
    slideIndex = (index + slides.length) % slides.length;
    carouselContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
    updateIndicators();
}

function updateIndicators() {
    indicators.forEach((indicator, idx) => {
        indicator.classList.toggle('active', idx === slideIndex);
    });
}

function nextSlide() {
    showSlide(slideIndex + 1);
}

function prevSlide() {
    showSlide(slideIndex - 1);
}

function currentSlide(index) {
    showSlide(index);
}

// Event listeners for the controls
document.getElementById('nextSlide').addEventListener('click', nextSlide);
document.getElementById('prevSlide').addEventListener('click', prevSlide);

setInterval(nextSlide, 4000); // Cambia de imagen automáticamente cada 5 segundos