<aside id="sidebar" class="group/sidebar bg-bg-secondary dark:bg-bg-secondary-dark px-2 pb-2 w-[260px] h-[calc(100dvh-60px)] sticky top-[60px] self-start duration-300 row-span-2">
    <section class="group/sidebar group-[.closed]/sidebar:px-2 px-4 bg-bg-tertiary dark:bg-bg-tertiary-dark h-full rounded-[12px] duration-300">
        <section class="group-[.closed]/sidebar:px-0 py-4 px-4 flex justify-end items-center gap-4 duration-300 overflow-hidden">
            <span class="grow text-lg">Municípios</span>
            <button id="sidebar-button" class="cursor-pointer rounded-[12px] p-3 bg-bg-secondary dark:bg-bg-secondary-dark hover:bg-bg-tertiary dark:hover:bg-bg-tertiary-dark [&_svg]:first:hidden group/sidebar group-[.closed]/sidebar:[&_svg]:first:inline group-[.closed]/sidebar:[&_svg]:last:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/><path d="m14 9 3 3-3 3"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/><path d="m16 15-3-3 3-3"/></svg>
            </button>
        </section>
        <ul class="group-[.closed]/sidebar:px-0 py-4 flex flex-col gap-2 duration-300 **:text-nowrap">
            <li class="flex justify-baseline overflow-hidden hover:bg-bg-secondary dark:hover:bg-bg-secondary-dark rounded-[12px]
            {{ request()->routeIs('home') ? 'bg-bg-secondary dark:bg-bg-secondary-dark text-highlight font-bold' : '' }}">
                <a href="/" class="grow flex items-center gap-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.6 10.4a2.12 2.12 0 1 0 3.02 2.98L12 7l6.4 6.4a2.12 2.12 0 1 0 2.979-3.021L13.7 2.7a2.4 2.4 0 0 0-3.404.004Z"/><path d="M20 14v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6"/><path d="M14 22v-6a2 2 0 0 0-4 0v6"/></svg>
                    <span>Início</span>
                </a>
            </li>
            <li class="flex justify-baseline overflow-hidden hover:bg-bg-secondary dark:hover:bg-bg-secondary-dark rounded-[12px]
            {{ request()->routeIs('daily') ? 'bg-bg-secondary dark:bg-bg-secondary-dark text-highlight font-bold' : '' }}">
                <a href="/daily" class="grow flex items-center gap-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><path d="M21 17V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11Z"/><path d="M3 10h18"/><path d="M15 22v-4a2 2 0 0 1 2-2h4"/></svg>
                    <span>Eliminado do Dia</span>
                </a>
            </li>
            <li class="flex justify-baseline overflow-hidden hover:bg-bg-secondary dark:hover:bg-bg-secondary-dark rounded-[12px]
            {{ request()->routeIs('eliminated') ? 'bg-bg-secondary dark:bg-bg-secondary-dark text-highlight font-bold' : '' }}">
                <a href="/eliminated" class="grow flex items-center gap-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="22" x2="18" y1="12" y2="12"/><line x1="6" x2="2" y1="12" y2="12"/><line x1="12" x2="12" y1="6" y2="2"/><line x1="12" x2="12" y1="22" y2="18"/></svg>
                    <span>Eliminados</span>
                </a>
            </li>
            <li class="flex justify-baseline overflow-hidden hover:bg-bg-secondary dark:hover:bg-bg-secondary-dark rounded-[12px]
            {{ request()->routeIs('data') ? 'bg-bg-secondary dark:bg-bg-secondary-dark text-highlight font-bold' : '' }}">
                <a href="/data" class="grow flex items-center gap-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                    <span>Dados Gerais</span>
                </a>
            </li>
        </ul>
    </section>
</aside>