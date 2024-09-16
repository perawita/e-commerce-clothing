<nav
    class="flex-none hidden lg:block xl:w-80 lg:w-80 rounded-lg bg-gray-50 shadow-md p-6 hover:shadow-lg transition-shadow duration-300 ease-in-out mb-1">
    <div class="lg:sticky lg:top-20">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Produk serupa</h2>
        <div class="space-y-4">
            <a href={{ route('product.detail', ['name_product'=> 'mesin pemotong rumput 3000']) }} class="hover:shadow-lg hover:w-64 hover:mb-1 flex items-start space-x-4">
                <img class="w-12 h-12 object-cover rounded"
                    src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                    alt="Product Image 1">
                <div>
                    <h3 class="text-md font-medium text-gray-900 dark:text-white">Produk 1</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Deskripsi singkat produk adadad adadad adada 1.
                    </p>
                    <p class="text-md font-bold text-gray-900 dark:text-white">Rp 200.000</p>
                </div>
            </a>

            <span class="relative flex justify-center">
                <div
                    class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
                </div>

                <span class="relative z-10 bg-white px-6"></span>
            </span>

            <a href={{ route('product.detail', ['name_product'=> 'mesin pemotong rumput 3000']) }} class="hover:shadow-lg hover:w-64 hover:mb-1 flex items-start space-x-4">
                <img class="w-12 h-12 object-cover rounded"
                    src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                    alt="Product Image 1">
                <div>
                    <h3 class="text-md font-medium text-gray-900 dark:text-white">Produk 1</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Deskripsi singkat produk adadad adadad adada 1.
                    </p>
                    <p class="text-md font-bold text-gray-900 dark:text-white">Rp 200.000</p>
                </div>
            </a>
        </div>
    </div>
</nav>
