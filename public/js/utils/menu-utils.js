/**
 * Hide all menus
 * @param {HTMLElement[]} menus - An array of menu elements to hide
 */
export function hideAllMenus(menus) {
    menus.forEach(menu => {
        if (menu) {
            menu.classList.add('hidden');
        }
    });
}

/**
 * Toggle visibility of a specific menu
 * @param {HTMLElement} menu - The menu element to toggle
 * @param {HTMLElement} activeMenu - The currently active menu
 * @param {HTMLElement[]} menus - An array of menu elements to hide if needed
 * @returns {HTMLElement} - The newly active menu or null if none
 */
export function toggleMenu(menu, activeMenu, menus) {
    if (activeMenu !== menu) {
        hideAllMenus(menus);
        menu.classList.remove('hidden');
        return menu;
    } else {
        menu.classList.add('hidden');
        return null;
    }
}