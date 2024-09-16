<nav class="md-2 block lg:hidden z-20">
    <button id="mobile-filter">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" fill="currentColor" class="bi bi-funnel"
            viewBox="0 0 16 16">
            <path
                d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
        </svg>
    </button>
</nav>

<div id="filter-mobile-menu" class="static p-9 w-auto hidden lg:hidden fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title"
    role="dialog" aria-modal="true">
    <!-- Background overlay -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- Modal container -->
    <div class="flex items-end justify-center min-h-full text-center sm:items-center sm:p-0">
        <div
            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:max-w-lg sm:w-full">

            <!-- Modal content -->
            <div class="bg-white px-9 pb-4 pt-5 sm:p-6 sm:pb-4">
                <h2 class="text-base md:text-xl font-bold text-gray-900 mb-2">Filter berdasarkan</h2>

                <!-- Filter Options -->
                <div class="space-y-4">

                    <!-- Kategori Filter -->
                    <div>
                        <h3 class="text-md font-semibold text-gray-700">Kategori</h3>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <input type="checkbox" id="kategori1" class="mr-2">
                                <label for="kategori1" class="text-gray-600">Elektronik</label>
                            </li>
                            <li>
                                <input type="checkbox" id="kategori2" class="mr-2">
                                <label for="kategori2" class="text-gray-600">Pakaian</label>
                            </li>
                            <li>
                                <input type="checkbox" id="kategori3" class="mr-2">
                                <label for="kategori3" class="text-gray-600">Rumah Tangga</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Filter Harga -->
                    <div>
                        <h3 class="text-md font-semibold text-gray-700">Harga</h3>
                        <div class="flex space-x-2 mt-2">
                            <input type="number" placeholder="Min" class="w-20 p-1 border rounded-md">
                            <input type="number" placeholder="Max" class="w-20 p-1 border rounded-md">
                        </div>
                    </div>

                    <!-- Filter Rating -->
                    <div>
                        <h3 class="text-md font-semibold text-gray-700">Rating</h3>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <input type="checkbox" id="rating1" class="mr-2">
                                <label for="rating1" class="text-gray-600">4 ke atas</label>
                            </li>
                            <li>
                                <input type="checkbox" id="rating2" class="mr-2">
                                <label for="rating2" class="text-gray-600">3 ke atas</label>
                            </li>
                            <li>
                                <input type="checkbox" id="rating3" class="mr-2">
                                <label for="rating3" class="text-gray-600">2 ke atas</label>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Footer / Button -->
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button"
                    class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 sm:ml-3 sm:w-auto">Filter</button>
                <button id="mobile-filter-close"
                    class="mt-1 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
            </div>
        </div>
    </div>
</div>
