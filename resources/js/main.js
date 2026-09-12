document.documentElement.classList.add('hide-scrollbar');

const navbar = document.querySelector('.navbar-custom');

window.addEventListener('scroll', () => {
    if (!navbar) return;

    // Aggiunge la classe per rimpicciolire la barra quando si scende oltre 50px
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}, { passive: true });