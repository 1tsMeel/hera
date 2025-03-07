<header class="bg-primary text-white body-font shadow-lg">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <!-- Logo y Nombre de la Empresa -->
        <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-enf-1 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl font-bold">HERA HERRRAJES Y CERRADURAS</span>
        </a>

        <!-- Menú de Navegación -->
        <nav
            class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-secondary flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('products.index') }}" class="mr-5 hover:text-enf-1 transition-colors duration-300">
                Productos
            </a>
            <a href="#" class="mr-5 hover:text-enf-1 transition-colors duration-300">
                Marcas
            </a>
            <a href="{{ route('cotizacion.index') }}" class="mr-5 hover:text-enf-1 transition-colors duration-300">
                Cotización
            </a>
            <a href="#" class="mr-5 hover:text-enf-1 transition-colors duration-300">
                Contacto
            </a>
        </nav>

        <!-- Botón de Cotización con Contador -->
        <div class="relative">
            <a href="{{ route('cotizacion.index') }}"
                class="inline-flex items-center bg-enf-2 text-white border-0 py-2 px-4 focus:outline-none hover:bg-enf-1 rounded-lg transition-colors duration-300 mt-4 md:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                Cotización
            </a>
            <!-- Contador -->
            <div
                class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs">
                3 <!-- Aquí puedes mostrar el número dinámico de elementos -->
            </div>
        </div>
    </div>
</header>
