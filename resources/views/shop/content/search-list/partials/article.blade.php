<article class="flex-1 bg-white shadow-md rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out">
    <div class="bg-white">
        <h2 class="text-ms md:text-xl font-bold text-gray-900 mb-4 text-center py-4">Hasil pencarian untuk nama produk: {{$name_product}}</h2>
        <div class="space-y-4">
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 text-sx md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="text-sx md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-sx md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('product.detail', ['name_product' => 'mesin pemotong rumput 3000']) }}" class="block hover:shadow-lg p-4 hover:p-2 transition-all">
                <!-- Flex container for image, title, and price -->
                <div class="flex space-x-4">
                    <!-- Image -->
                    <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                    
                    <!-- Content wrapper -->
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <!-- Title and Rating -->
                            <div>
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <!-- Bintang Rating -->
                                    <div class="flex">
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg class="h-3 w-3 md:h-5 md:w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="ml-2 md:text-sm md:font-medium text-indigo-600">117 reviews</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="text-right">
                                <p class="md:text-md md:font-bold text-gray-900">Rp 200.000</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="md:text-sm text-gray-500 line-clamp-2 mt-2">
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                            Deskripsi singkat produk adadad adadad adada adadad adadad adada adad ad adada adadadadadadadadadadadad 1. adadadadad adadada adadada adadada adadad adadadaa
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</article>
<br>