<article class="bg-white shadow-md rounded-md hover:shadow-md transition-shadow duration-300 ease-in-out p-4 lg:p-6 lg:p-8">
    <div class="container mx-auto mt-5 lg:mt-10">
        <!-- Flex container with flex-col-reverse for screens smaller than lg -->
        <div class="lg:flex lg:gap-6 lg:gap-10 my-5 lg:my-10 flex flex-col-reverse lg:flex-row">
            <!-- Shopping Cart Section -->
            <div class="w-full lg:w-3/4 bg-white sm:px-6 lg:px-10">
                <div class="flex justify-between border-b pb-4 lg:pb-8">
                    <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl">Shopping Cart</h1>
                    <h2 class="font-semibold text-lg sm:text-xl lg:text-2xl">3 Items</h2>
                </div>

                <!-- Repeat shopping cart items -->
                <div class="flex flex-col lg:flex-row items-stretch py-6 lg:py-8 border-t border-gray-50">
                    <div class="w-full lg:w-3/6">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Black Leather Purse" class="h-full w-full object-center object-contain" />
                    </div>
                    <div class="lg:pl-3 lg:w-8/12 flex flex-col justify-center mt-4 lg:mt-0">
                        <p class="text-xs lg:text-sm text-gray-800">RF293</p>
                        <div class="flex items-center justify-between">
                            <p class="text-base lg:text-lg font-black text-gray-800">Luxe card holder</p>
                            <select aria-label="Select quantity" class="py-2 px-1 border border-gray-200 focus:outline-none">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <p class="text-xs lg:text-sm text-gray-600 pt-2">Height: 10 inches</p>
                        <p class="text-xs lg:text-sm text-gray-600 py-4">Color: Black</p>
                        <p class="text-xs lg:text-sm text-gray-600">Composition: 100% calf leather</p>
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-xs lg:text-sm text-red-500 underline cursor-pointer">Remove</p>
                            <p class="text-base lg:text-lg font-black text-gray-800">Rp1,000,000</p>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan item lainnya sesuai dengan format ini -->
            </div>

            <!-- Order Summary Section -->
            <div class="w-full lg:w-1/4 sm:px-6 lg:px-8 lg:mt-5 lg:mt-0">
                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl border-b pb-4 lg:pb-8">Order Summary</h1>
                <div class="flex justify-between mt-5 lg:mt-10 mb-5">
                    <span class="font-semibold text-sm sm:text-base uppercase">Items 3</span>
                    <span class="font-semibold text-sm sm:text-base">$590</span>
                </div>
                <div>
                    <label class="font-medium inline-block mb-3 text-sm sm:text-base uppercase">Shipping</label>
                    <select class="block p-2 text-gray-600 w-full text-sm sm:text-base">
                        <option>Standard shipping - $10.00</option>
                    </select>
                </div>
                <div class="py-5 lg:py-10">
                    <label for="promo" class="font-semibold inline-block mb-3 text-sm sm:text-base uppercase">Promo Code</label>
                    <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm sm:text-base w-full" />
                </div>
                <button class="bg-red-500 hover:bg-red-600 px-4 py-2 text-sm sm:text-base text-white uppercase w-full">Apply</button>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-4 lg:py-6 text-sm sm:text-base uppercase">
                        <span>Total cost</span>
                        <span>$600</span>
                    </div>
                    <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-2 lg:py-3 text-sm sm:text-base text-white uppercase w-full">Checkout</button>
                </div>
                <br>
            </div>
        </div>
    </div>
</article>
<br>