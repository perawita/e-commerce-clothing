<section class="bg-white shadow-md rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out"
    id="contact">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4 text-center">
            <p class="md:text-base md:font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-200">Contact</p>
            <h2 class="md:font-heading mb-4 md:font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">Get
                in Touch</h2>
            <p class="mx-auto mt-4 max-w-3xl md:text-xl text-gray-600 dark:text-slate-400">In hac habitasse platea dictumst
            </p>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 md:text-lg text-gray-600 dark:text-slate-400">Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Duis nec ipsum orci. Ut scelerisque
                        sagittis ante, ac tincidunt sem venenatis ut.</p>
                    <ul class="space-y-6">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <!-- Address Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>

                            </div>
                            <div class="ml-4">
                                <h3 class="mb-2 md:text-lg md:font-medium leading-6 text-gray-900 dark:text-white">Our Address
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">1230 Maecenas Street Donec Road</p>
                                <p class="text-gray-600 dark:text-slate-400">New York, EEUU</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <!-- Contact Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="mb-2 md:text-lg md:font-medium leading-6 text-gray-900 dark:text-white">Contact
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Mobile: +1 (123) 456-7890</p>
                                <p class="text-gray-600 dark:text-slate-400">Mail: tailnext@gmail.com</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <!-- Hours Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="mb-2 md:text-lg md:font-medium leading-6 text-gray-900 dark:text-white">Working
                                    Hours</h3>
                                <p class="text-gray-600 dark:text-slate-400">Monday - Friday: 08:00 - 17:00</p>
                                <p class="text-gray-600 dark:text-slate-400">Saturday &amp; Sunday: 08:00 - 12:00</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="h-fit max-w-6xl p-5 md:p-12 rounded-lg">
                    <div class="text-center">
                        <a href="{{ route('contact.product.ask', ['id_product' => 'help']) }}"
                            class="bg-blue-800 text-white px-6 py-3 font-xl rounded-md">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
