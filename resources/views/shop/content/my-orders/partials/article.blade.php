<article class="rounded-lg mt-0">
    <div class="flex flex-col md:flex-row gap-4">
        <!-- Progress Section -->
        <div class="flex-1 bg-white rounded-lg border border-gray-300 shadow-md p-4 md:p-6">
            <h2 class="md:text-2xl md:font-bold mb-6 md:text-xl">Tracking Paket {{$id_invoice}}</h2>
            <div class="w-full">
                <!-- Step progress -->
                <div x-data="{ steps: ['Profile', 'Contact', 'Identity', 'Passport'], currentStep: 2 }" class="w-full">
                    <ul aria-label="Steps" class="flex flex-col md:flex-row items-center text-gray-600 md:font-medium">
                        <template x-for="(item, idx) in steps" :key="idx">
                            <li :aria-current="currentStep === idx + 1 ? 'step' : false" class="flex-1 last:flex-none flex items-center gap-x-2">
                                <div class="flex items-center flex-col gap-x-2">
                                    <div :class="{
                                        'w-8 h-8 rounded-full border-2 flex items-center justify-center': true,
                                        'bg-indigo-600 border-indigo-600': currentStep > idx + 1,
                                        'border-indigo-600': currentStep === idx + 1
                                        }">
                                        <span x-show="currentStep === idx + 1" class="text-white" x-text="idx + 1"></span>
                                        <template x-if="currentStep > idx + 1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </template>
                                    </div>
                                    <hr :class="{'h-12 border md:hidden': true, 'hidden': idx + 1 === steps.length, 'border-indigo-600': currentStep > idx + 1}" />
                                </div>
                                <div class="h-8 flex items-center md:h-auto">
                                    <h3 :class="{ 'md:text-md': true, 'text-indigo-600': currentStep === idx + 1 }" x-text="item"></h3>
                                </div>
                                <hr :class="{'hidden w-full border md:block': true, 'hidden': idx + 1 === steps.length, 'border-indigo-600': currentStep > idx + 1}" />
                            </li>
                        </template>
                    </ul>
                </div>

                <div class="mt-8 md:mt-14 text-[#202142]">
                    <!-- Information route products -->
                    <div class="mb-6">
                        <label for="message" class="block mb-2 md:text-md md:font-medium text-indigo-900">Destinasi Paket</label>
                        <textarea id="message" rows="4" class="block w-full md:text-md text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Write your bio here..." readonly></textarea>
                    </div>

                    <!-- Package details section -->
                    <div class="mb-6">
                        <label class="block mb-2 md:text-md md:font-medium text-indigo-900">Detail Paket</label>
                        <div class="md:flex items-stretch py-8 border-t border-gray-50">
                            <div class="w-full md:w-4/12 mb-4 md:mb-0">
                                <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse" class="hidden md:block w-full h-auto object-cover rounded-lg" />
                                <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse" class="md:hidden w-full h-auto object-cover rounded-lg" />
                            </div>
                            <div class="md:w-8/12 flex flex-col justify-center p-3">
                                <p class="md:text-xs text-gray-800">RF293</p>
                                <div class="flex justify-between items-center mb-2">
                                    <p class="md:text-base md:font-bold text-gray-800">Luxe Card Holder</p>
                                    <select class="py-2 px-2 border border-gray-200" disabled>
                                        <option selected>01</option>
                                    </select>
                                </div>
                                <p class="md:text-xs text-gray-600">Height: 10 inches</p>
                                <p class="md:text-xs text-gray-600">Color: Black</p>
                                <p class="md:text-xs text-gray-600">Composition: 100% calf leather</p>
                                <div class="flex justify-between items-center mt-2">
                                    <p class="md:text-xs text-red-500 cursor-pointer">Remove</p>
                                    <p class="md:text-base md:font-bold text-gray-800">Rp. 300000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Address Section -->
        <div class="flex-1 bg-white rounded-lg border border-gray-300 shadow-md p-4 md:p-6">
            <h2 class="md:text-2xl md:font-bold mb-6 md:text-xl">History Pembelian</h2>
            <div class="w-full">
                <div class="mb-6">
                    <a href="{{ route('shoping.orders.index', ['id_user' => 'py', 'id_invoice' => '123aCu']) }}" class="block hover:shadow-lg p-4 transition-all rounded-lg">
                        <div class="flex space-x-4">
                            <!-- Image -->
                            <img class="w-16 h-16 object-cover rounded" src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Product Image">
                            <!-- Content -->
                            <div class="flex-grow">
                                <h3 class="md:text-md md:font-medium text-gray-900">Produk 1</h3>
                                <div class="flex items-center">
                                    <div class="flex">
                                        <!-- Stars rating or icon -->
                                    </div>
                                    <span class="ml-2 md:text-md md:font-medium text-indigo-600 flex items-center">
                                        <div class="bg-green-300 rounded-full h-2 w-2 md:h-3 md:w-3 animate-pulse"></div>
                                        <p class="text-xs md:text-md">Di Terima</p>
                                    </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-xs md:text-md md:font-semibold text-gray-900">Rp. 300000</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
