<article class="bg-white shadow-md rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-outrelative z-20 prose prose-slate mt-8 dark:prose-dark">
    <div class="flex bg-white">
        <div class="bg-gray-200 flex-1 overflow-y-auto">
            <div class="px-4 py-8 space-y-4">
                <!-- Chat Messages -->
                <div class="flex items-center">
                    <img class="w-8 h-8 rounded-full mr-2" src="https://picsum.photos/50/50" alt="User Avatar">
                    <div class="md:font-medium">John Doe</div>
                </div>
                <div class="bg-white rounded-lg p-2 shadow max-w-sm">Hi, how can I help you?</div>
                <div class="flex items-center justify-end">
                    <div class="bg-blue-500 text-white rounded-lg p-2 shadow max-w-sm">Sure, I can help with that.</div>
                    <img class="w-8 h-8 rounded-full ml-2" src="https://picsum.photos/50/50" alt="User Avatar">
                </div>
                <!-- Repeat Chat Messages as Needed -->
            </div>
            <div class="px-4 py-2 border-t">

                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center py-2 px-3 bg-gray-50 rounded-lg dark:bg-gray-700">
                        <button type="button"
                            class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button type="button"
                            class="hidden md:block p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <textarea id="chat" rows="1"
                            class="custom-textarea block mx-4 p-1.5 md:p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <button type="submit"
                            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg class="w-6 h-6 transform rotate-90" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>
