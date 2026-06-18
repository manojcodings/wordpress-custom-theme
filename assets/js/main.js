// Mobile Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const mobileClose = document.getElementById('mobileClose');
const overlay = document.getElementById('overlay');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.add('active');
    overlay.classList.add('active');
});

mobileClose.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
    overlay.classList.remove('active');
});

overlay.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
    overlay.classList.remove('active');
});

// Scroll to Top
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        document.querySelector('.scroll-top')?.classList.add('show');
    } else {
        document.querySelector('.scroll-top')?.classList.remove('show');
    }
});