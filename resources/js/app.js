import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Navigation responsive
const toggleMenuBtn = document.querySelector("#menu-btn");
// const toggleMenuImg = document.querySelector("#menu-btn img");
const toggledMenu = document.querySelector("#toggled-menu");
// const menuLinks = document.querySelector("#main-nav ul a");

toggleMenuBtn.addEventListener("click", toggleNav);

function toggleNav() {
    toggledMenu.classList.toggle("-translate-y-[400px]");

    if (toggledMenu.classList.contains("-translate-y-[400px]")) {
        // toggleMenuImg.setAttribute("src", "images/menu.svg");
        toggleMenuBtn.setAttribute("aria-expanded", "false");
    } else {
        // toggleMenuImg.setAttribute("src", "images/cross.svg");
        toggleMenuBtn.setAttribute("aria-expanded", "true");
    }
}