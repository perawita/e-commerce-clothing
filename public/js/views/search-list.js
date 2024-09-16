import { toggleMenu } from "/js/utils/menu-utils.js";

document.addEventListener('DOMContentLoaded', function(){
    const mobileFilter = document.getElementById('mobile-filter');
    const closeFilterMenu = document.getElementById('mobile-filter-close');
    const mobileFilterMenu = document.getElementById('filter-mobile-menu');

    let activeMenu = null;
    const allMenus = [mobileFilterMenu];

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
    attachMenuToggle(mobileFilter , mobileFilterMenu);
    attachMenuToggle(closeFilterMenu, mobileFilterMenu);
});