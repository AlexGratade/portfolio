// Gestion de l'ouverture/fermeture du menu
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector("header nav ul");

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Animation de la page lorsqu'elle est chargée
    const pageContent = document.querySelector('main');
    pageContent.style.opacity = '0';
    setTimeout(() => {
        pageContent.style.transition = 'opacity 0.5s ease';
        pageContent.style.opacity = '1';
    }, 100);
});

