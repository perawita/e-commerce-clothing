<nav id="seacrh-filter"
    class="flex-none hidden lg:block xl:w-64 lg:w-64 rounded-lg bg-gray-50 shadow-md p-6 hover:shadow-lg transition-shadow duration-300 ease-in-out mb-1">
    <div class="lg:sticky lg:top-20">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Filter berdasarkan</h2>
        <div class="space-y-4">

            <!-- Kategori Filter -->
            <div>
                <h3 class="text-md font-semibold text-gray-700">Kategori</h3>
                <ul class="space-y-2 mt-2">
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

            <!-- Filter Merek -->
            <div>
                <h3 class="text-md font-semibold text-gray-700">Merek</h3>
                <ul class="space-y-2 mt-2">
                    <li>
                        <input type="checkbox" id="merek1" class="mr-2">
                        <label for="merek1" class="text-gray-600">Samsung</label>
                    </li>
                    <li>
                        <input type="checkbox" id="merek2" class="mr-2">
                        <label for="merek2" class="text-gray-600">Apple</label>
                    </li>
                    <li>
                        <input type="checkbox" id="merek3" class="mr-2">
                        <label for="merek3" class="text-gray-600">Sony</label>
                    </li>
                </ul>
            </div>

            <!-- Filter Rating -->
            <div>
                <h3 class="text-md font-semibold text-gray-700">Rating</h3>
                <ul class="space-y-2 mt-2">
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

            <!-- Tombol Terapkan Filter -->
            <button class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition duration-300 ease-in-out">
                Terapkan Filter
            </button>
        </div>
    </div>
</nav>