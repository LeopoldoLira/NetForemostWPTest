document.addEventListener("DOMContentLoaded", function () {
    const shadowElement = document.getElementById('shadow-target');
    function handleScroll() {
        window.scrollY > 0 ? shadowElement.classList.add('shadow-animation') : shadowElement.classList.remove('shadow-animation') 
    }
    window.addEventListener('scroll', handleScroll);
});