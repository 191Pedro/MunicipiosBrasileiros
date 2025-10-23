<header id="header" class="flex justify-center items-center bg-bg-secondary dark:bg-bg-secondary-dark h-[60px] px-[24px] col-span-2 sticky top-0 z-[1] duration-300">
    <section class="flex justify-between items-center grow h-full">
        <section class="w-[140px] h-[70px] [&_img]:last:hidden dark:[&_img]:first:hidden dark:[&_img]:last:inline">
            <img class="size-full" src="{{ asset('svgs/EliminandoMunicipios.svg') }}" alt="EMB-light">
            <img class="size-full" src="{{ asset('svgs/EliminandoMunicipios-dark.svg') }}" alt="EMB-dark">
        </section>
        <section class="flex justify-center items-center h-full">
            <button class="px-[12px] cursor-pointer size-full hover:bg-bg-tertiary dark:hover:bg-bg-tertiary-dark" id="theme-switch">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"/></svg>
            </button>
            <button class="px-[12px] cursor-pointer size-full hover:bg-bg-tertiary dark:hover:bg-bg-tertiary-dark peer/config" id="config-btn" onclick=activeMenu(this)>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/><circle cx="12" cy="12" r="3"/></svg>
            </button>
            @include('components.config-menu')
            <button class="px-[12px] cursor-pointer size-full hover:bg-bg-tertiary dark:hover:bg-bg-tertiary-dark peer/info" id="info-btn" onclick=activeMenu(this)>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
            </button>
            @include('components.info-menu')
        </section>
    </section>
</header>

@push('scripts')
    <script>
        const header = document.getElementById('header')

        function activeMenu(button) {
            if (!button.nextElementSibling.classList.contains('show')) {
                closeAllMenus()
            }

            if (!button.classList.contains('show')) {
                button.classList.remove('bg-transparent');
                button.classList.add('bg-bg-tertiary', 'dark:bg-bg-tertiary-dark', 'text-highlight', 'show');
            }
            else {
                console.log('oi')
                button.classList.remove('bg-bg-tertiary', 'dark:bg-bg-tertiary-dark', 'text-highlight', 'show');
                button.classList.add('bg-transparent');
            }
        }

        function closeAllMenus() {
            Array.from(header.querySelectorAll('.show')).forEach(item => {
                item.classList.remove('bg-bg-tertiary', 'dark:bg-bg-tertiary-dark', 'text-highlight', 'show');
            })
        }
    </script>
@endpush