{{-- <header class="bg-primary text-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <div class="bg-secondary text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
            </div>
            <span class="text-xl font-bold">HERA HERRAJES</span>
        </a>

        <!-- Menú -->
        <nav class="hidden md:flex gap-6">
            <a href="{{ route('products.index') }}" class="btn btn-ghost">Productos</a>
            <a href="#" class="btn btn-ghost">Marcas</a>
            <a href="{{ route('cotizacion.index') }}" class="btn btn-ghost">Cotización</a>
            <a href="#" class="btn btn-ghost">Contacto</a>
        </nav>

        <!-- Botón Cotización -->
        <div class="relative">
            <a href="{{ route('cotizacion.index') }}" class="btn btn-accent flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <span>Cotización</span>
                <div class="badge badge-error absolute -top-2 -right-2">3</div>
            </a>
        </div>

        <!-- Menú Responsive -->
        <div class="dropdown md:hidden">
            <label tabindex="0" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ route('products.index') }}">Productos</a></li>
                <li><a href="#">Marcas</a></li>
                <li><a href="{{ route('cotizacion.index') }}">Cotización</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</header> --}}

<header
    class="text-white w-full relative mx-auto flex flex-col overflow-hidden px-4 py-4 lg:flex-row lg:items-center bg-primary">
    <a href="{{ route('home') }}" class="flex items-center whitespace-nowrap text-2xl font-black">
        <span class="mr-2 w-8">
            <img src="/images/JOJj79gp_Djhwdp_ZOKLL.png" alt="" />
        </span>
        HERA
    </a>
    <input type="checkbox" class="peer hidden" id="navbar-open" />
    <label class="absolute top-5 right-5 cursor-pointer lg:hidden" for="navbar-open">
        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </label>
    <nav aria-label="Header Navigation"
        class="peer-checked:pt-8 peer-checked:max-h-60 flex max-h-0 w-full flex-col items-center overflow-hidden transition-all lg:ml-24 lg:max-h-full lg:flex-row">
        <ul class="flex w-full flex-col items-center space-y-2 lg:flex-row lg:justify-center lg:space-y-0">
            <li class="lg:mr-12"><a
                    class="rounded text-gray-200 transition focus:outline-none  focus:ring-blue-700 focus:ring-offset-2"
                    href="{{ route('products.index') }}">Productos</a></li>
            <li class="lg:mr-12"><a
                    class="rounded text-gray-200 transition focus:outline-none  focus:ring-blue-700 focus:ring-offset-2"
                    href="#">Marcas</a></li>
            <li class="lg:mr-12"><a
                    class="rounded text-gray-200 transition focus:outline-none focus:ring-blue-700 focus:ring-offset-2"
                    href="#">Contactos</a></li>
            <li class="lg:mr-12"><a
                    class="rounded text-gray-200 transition focus:outline-none  focus:ring-blue-700 focus:ring-offset-2"
                    href="{{ route('cotizacion.index') }}">Cotización</a></li>
        </ul>
        <hr class="mt-4 w-full lg:hidden" />
        <div class="my-4 flex items-center space-x-6 space-y-2 lg:my-0 lg:ml-auto lg:space-x-8 lg:space-y-0">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('admin.dashboard') }}" title=""
                        class="whitespace-nowrap rounded font-medium transition-all duration-200 focus:outline-none focus:ring-1 focus:ring-blue-700 focus:ring-offset-2 hover:text-opacity-50">
                        Dashboard </a>
                @else
                    <a href="{{ route('admin.dashboard') }}" title=""
                        class="whitespace-nowrap rounded font-medium transition-all duration-200 focus:outline-none focus:ring-1 focus:ring-blue-700 focus:ring-offset-2 hover:text-opacity-50">
                        Iniciar sesión </a>
                @endauth
            @endif

            <a href="{{ route('cotizacion.index') }}" title=""
                class="whitespace-nowrap rounded-xl bg-blue-700 px-5 py-3 font-medium text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 hover:bg-blue-600"><i
                    class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </nav>
</header>
