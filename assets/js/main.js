document.addEventListener("DOMContentLoaded", function () {
    const shadowElements = document.querySelectorAll('.shadow-target');

    function handleScroll() {
        shadowElements.forEach(function(shadowElement) {
            window.scrollY > 0 
                ? shadowElement.classList.add('shadow-animation') 
                : shadowElement.classList.remove('shadow-animation');
        });
    }

    window.addEventListener('scroll', handleScroll);
});
