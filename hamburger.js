function toggleMenu() {
    const menu = document.getElementById('menu');
    const hamburger = document.getElementById('hamburger');
    menu.classList.toggle('open');
    hamburger.classList.toggle('active'); // Poprawione z kropką
}