<div>
    <main id="main" class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <div
            class="flex-1 hidden lg:block fixed z-20 inset-0 top-[3.8125rem] left-[max(0px,calc(50%-45rem))] right-auto w-[19rem] pb-10 pl-8 pr-6 overflow-y-auto">
            <nav id="nav" class="lg:text-sm lg:leading-6 relative">
                <div class="sticky top-20 -ml-0.5 pointer-events-none">
                    <div class="h-20 bg-white dark:bg-slate-900"></div>
                    <div class="bg-white dark:bg-slate-900 relative pointer-events-auto">
                    </div>
                    <div class="h-8 bg-gradient-to-b from-white dark:from-slate-900"></div>
                </div>
            </nav>
        </div>
        <div class="lg:pl-[19.5rem]">
            {{ $slot }}
        </div>
    </main>
</div>
