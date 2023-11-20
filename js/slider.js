document.addEventListener('DOMContentLoaded', function () {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    function nextSlide() {
        const firstSlide = sliderWrapper.firstElementChild;
        sliderWrapper.appendChild(firstSlide);
        sliderWrapper.style.transform = 'translateX(0)';
    }

    function prevSlide() {
        const lastSlide = sliderWrapper.lastElementChild;
        sliderWrapper.insertBefore(lastSlide, sliderWrapper.firstElementChild);
        sliderWrapper.style.transform = 'translateX(0)';
    }

    function startSlider() {
        setInterval(nextSlide, 10000); // Change slide every 2 seconds (adjust as needed)
    }

    startSlider();

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
});
