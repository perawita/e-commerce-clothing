import { hideAllMenus, toggleMenu } from '/js/utils/menu-utils.js';
import { getController } from '/js/utils/search-enggine.js';

document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const loginBtn = document.getElementById('login-btn');
    const menuLogin = document.getElementById('menu-login');
    const userBtn = document.getElementById('user-btn');
    const userMenu = document.getElementById('menu-user');
    const searchEnggine = document.getElementById('search-enggine')
    const searchMenu = document.getElementById('menu-search')
    const titleSearchEnggine = document.getElementById('title-for-search');
    const resultMenu = document.getElementById('result-for-search');

    let activeMenu = null;
    const allMenus = [mobileMenu, menuLogin, userMenu, searchMenu]; // Array untuk semua menu

    /**
     * Menangani tampilan menu berdasarkan ukuran layar
     */
    function handleResponsiveVisibility() {
        if (window.innerWidth < 1024) {
            // Pastikan menu login disembunyikan jika menu mobile ditampilkan
            if (activeMenu === mobileMenu) {
                menuLogin.classList.add('hidden');
            }
            menuBtn.classList.remove('hidden');
        } else {
            menuBtn.classList.add('hidden');
        }
    }

    // Initial check on page load
    handleResponsiveVisibility();

    // Handle responsive menu visibility on window resize
    window.addEventListener('resize', handleResponsiveVisibility);

    /**
     * Function to attach toggle behavior to buttons dynamically
     * @param {HTMLElement} button - The button that toggles the menu
     * @param {HTMLElement} menu - The menu that is toggled
     */
    function attachMenuToggle(button, menu) {
        button.addEventListener('click', () => {
            activeMenu = toggleMenu(menu, activeMenu, allMenus);
        });
    }

    /**
     * Function to attach search enggine toggle behavior to buttons dynamically
     * @param {HTMLElement} button - The button that toggles the menu
     * @param {HTMLElement} menu - The menu that is toggled
     */
    function attachSearchToggle(button, menu) {
        button.addEventListener('click', () => {
            activeMenu = toggleMenu(menu, activeMenu, allMenus);
        });

        button.addEventListener('input', () => {
            const active = !toggleMenu(menu, activeMenu, allMenus);
            if (active) {
                activeMenu = toggleMenu(menu, activeMenu, allMenus);
            }
        });

        getController(searchEnggine, titleSearchEnggine, resultMenu);
    }

    // Attach the toggle behavior to all existing buttons
    attachMenuToggle(menuBtn, mobileMenu);
    attachMenuToggle(loginBtn, menuLogin);

    attachSearchToggle(searchEnggine, searchMenu);
    if (userBtn && userMenu) {
        attachMenuToggle(userBtn, userMenu);
    }


    // Close menu if in outside from element menu and if inside main element
    document.getElementById('main').addEventListener('click', function (event) {
        allMenus.forEach(menu => {
            if (menu) {
                const isClickInsideMenu = menu.contains(event.target);

                if (!isClickInsideMenu) {
                    menu.classList.add('hidden');
                }
            }
            return null;
        });
    });
});
