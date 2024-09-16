<article class="col-span-4 rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out mt-0">
    <div class="flex flex-wrap">
        <div class="grid md:flex w-full">
            <!-- Bio Section -->
            <div class="lg:w-full md:w-1/2 md:px-6 md:pb-8 md:mt-8 md:max-w-xl md:rounded-lg md:border-r md:border-gray-300">
                <h2 class="pl-6 md:text-2xl md:font-bold sm:text-xl">Public Profile</h2>
                <div class="grid max-w-2xl mx-auto mt-8">
                    <!-- Content for Bio -->
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">
                        <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Bordered avatar">
                        <div class="flex flex-col space-y-5 sm:ml-8">
                            <button type="button"
                                class="py-1.5 px-3 sm:py-3.5 sm:md:px-7  text-base md:font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                Change picture
                            </button>
                            <button type="button"
                                class="py-1.5 px-3 sm:py-3.5 sm:md:px-7  text-base md:font-medium text-indigo-900 focus:outline-none bg-white rounded-lg border border-indigo-200 hover:bg-indigo-100 hover:text-[#202142] focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                Delete picture
                            </button>
                        </div>
                    </div>

                    <div class="items-center mt-8 sm:mt-14 text-[#202142]">
                        <!-- Bio and other inputs -->
                        <div class="flex flex-col items-center sm:w-full sm:mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                            <div class="w-full">
                                <label for="first_name" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your first name</label>
                                <input type="text" id="first_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="Your first name" value="Jane" required>
                            </div>
                            <div class="w-full">
                                <label for="last_name" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your last name</label>
                                <input type="text" id="last_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="Your last name" value="Ferguson" required>
                            </div>
                        </div>
                        <div class="mb-2 sm:mb-6">
                            <label for="email" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your email</label>
                            <input type="email" id="email" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="your.email@mail.com" required>
                        </div>
                        <div class="mb-2 sm:mb-6">
                            <label for="profession" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Profession</label>
                            <input type="text" id="profession" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="your profession" required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Bio</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full md:text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 " placeholder="Write your bio here..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 md:font-medium rounded-lg md:text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Address Section -->
            <div class="lg:w-full md:w-1/2 md:px-6 md:pb-8 md:mt-8 md:max-w-xl md:rounded-lg md:border-l md:border-gray-300">
                <h2 class="pl-6 md:text-2xl md:font-bold sm:text-xl">Alamat Anda</h2>
                <div class="grid max-w-2xl mx-auto">
                    <!-- Content for Address -->
                    <div class="top-0 items-center mt-8 sm:mt-9 text-[#202142]">
                        <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                            <div class="w-full">
                                <label for="first_name" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your first name</label>
                                <input type="text" id="first_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="Your first name" value="Jane" required>
                            </div>
                            <div class="w-full">
                                <label for="last_name" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your last name</label>
                                <input type="text" id="last_name" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="Your last name" value="Ferguson" required>
                            </div>
                        </div>
                        <div class="mb-2 sm:mb-6">
                            <label for="email" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Your email</label>
                            <input type="email" id="email" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="your.email@mail.com" required>
                        </div>
                        <div class="mb-2 sm:mb-6">
                            <label for="profession" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Profession</label>
                            <input type="text" id="profession" class="bg-indigo-50 border border-indigo-300 text-indigo-900 md:text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 " placeholder="your profession" required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 md:text-sm md:font-medium text-indigo-900 dark:text-white">Bio</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full md:text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 " placeholder="Write your bio here..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 md:font-medium rounded-lg md:text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<br>