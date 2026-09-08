const navbar = document.querySelector('.navbar');
const toggle = document.querySelector('[data-menu-toggle]');

toggle?.addEventListener('click', () => {
    const isOpen = navbar.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(isOpen));
});
