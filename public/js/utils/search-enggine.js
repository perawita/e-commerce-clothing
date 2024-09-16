export function getController(getInput, getTitle, getMenu) {
    const input = getInput;
    const title = getTitle;
    const menu = getMenu;

    try {
        input.addEventListener('input', async function () {
            // Placeholder content
            let result = `
                <div class="flex border border-gray-200 rounded-lg p-4 transition-colors animate-pulse">
                    <!-- Placeholder for Image -->
                    <div class="w-12 h-12 md:w-24 md:h-24 bg-gray-100 rounded-lg mr-4"></div>
                    <div class="flex-1">
                        <!-- Placeholder for Title -->
                        <div class="bg-gray-100 h-6 w-3/4 mb-2 rounded"></div>
                        <!-- Placeholder for Description -->
                        <div class="bg-gray-100 h-11 w-5/6 mb-2 rounded"></div>
                    </div>
                </div>`;

            if (!input.value.trim()) {
                // If input is empty, show placeholders
                menu.innerHTML = result;
                title.innerHTML = 'Cari produk';
                return;
            }

            // If input is not empty, show search results
            title.innerHTML = 'Produk teratas untuk ' + input.value;

            result = `<!-- Search Result Item -->
                <a href="/product/${encodeURIComponent(input.value)}"<div class="flex border border-gray-200 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Item Image"
                        class="w-12 h-12 md:w-24 md:h-24 object-cover rounded-lg mr-4">
                    <div class="flex-1">
                        <h3 class="text-gray-800 font-semibold mb-1 md:text-lg">Item Title 1</h3>
                        <p class="text-gray-600 mb-2">This is a brief description of the first search result item. It
                            provides some details about the content or the topic.</p>
                    </div>
                </a>
                
                <a href="#"<div class="flex border border-gray-200 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Item Image"
                        class="w-12 h-12 md:w-24 md:h-24 object-cover rounded-lg mr-4">
                    <div class="flex-1">
                        <h3 class="text-gray-800 font-semibold mb-1 md:text-lg">Item Title 1</h3>
                        <p class="text-gray-600 mb-2">This is a brief description of the first search result item. It
                            provides some details about the content or the topic.</p>
                    </div>
                </a>
                `;

            let footbar = `<!-- Link to view more products -->
                <div class="text-center py-4">
                    <a href="/search/product/${encodeURIComponent(input.value)}"
                        class="text-blue-500 hover:text-blue-700 transition-colors md:text-sm lg:text-base font-medium">
                        Lihat lebih banyak tentang produk
                    </a>
                </div>`;

            // Check if products are found, otherwise show a not found message
            // Here you might want to replace this with actual logic for checking results
            const productsFound = true; // Replace with your actual condition

            if (productsFound) {
                menu.innerHTML = result + footbar;
                return new URL(`/search/product/${encodeURIComponent(input.value)}`).href;
            } else {
                menu.innerHTML = `<p class='text-center text-gray-700'>Maaf untuk produk <b>${input.value}</b> belum tersedia</p>`;
            }
        });
    } catch (error) {
        console.error('search-engine: ' + error);
    }
}
