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

document.addEventListener("DOMContentLoaded", function () {
    const menuIconElement = document.getElementById('header-responsive__menu--icon');
    const menuIconImg = document.getElementById('menu-icon-img');
    const sideMenu = document.getElementById('side-menu');
    const closeMenuButton = document.getElementById('close-menu');

    // Ensure you are using absolute URLs or check URL formatting
    const defaultSrc = menuIconImg.getAttribute('src');  
    const alternateSrc = '/wp-content/uploads/2024/08/cross-svgrepo-com.png';

    let isMenuOpen = false;

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        console.log('Menu Open Status:', isMenuOpen); // Debug log

        if (isMenuOpen) {
            sideMenu.classList.add('open');
            menuIconImg.setAttribute('src', alternateSrc);
        } else {
            sideMenu.classList.remove('open');
            menuIconImg.setAttribute('src', defaultSrc);
        }
    }

    menuIconElement.addEventListener('click', toggleMenu);
    closeMenuButton.addEventListener('click', function() {
        isMenuOpen = false;
        sideMenu.classList.remove('open');
        menuIconImg.setAttribute('src', defaultSrc);
    });
});

