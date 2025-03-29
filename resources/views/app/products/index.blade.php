<x-home-layout>
    <div x-data="sidebar()" class="container mx-auto px-4 py-8 flex flex-col">
        <div class="flex flex-col lg:flex-row gap-8 flex-grow relative">
            <!-- Sidebar Filters -->
            <div>
                <button @click="sidebarOpen = !sidebarOpen"
                    class="btn btn-teal text-xs justify-center items-center -top-0 -left-0 z-10"
                    :class="sidebarOpen ? 'absolute' : 'static'">
                    <i :class="sidebarOpen ? 'fa-solid fa-chevron-left' : 'fa-solid fa-bars'"></i>
                </button>
            </div>
            <div x-show="sidebarOpen" x-collapse.duration.0ms x-transition
                class="lg:w-1/4 bg-white p-6 rounded-lg shadow-sm h-fit">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold">Filtros</h2>
                    <button class="text-blue-600 text-sm hover:text-blue-800" @click="cleanFilters()">Limpiar
                        todos</button>
                </div>

                <!-- Categories -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Categories</h3>
                    <div class="space-y-2 grid grid-cols-3 text-xs">
                        <template x-for="classification in classifications" :key="classification.id">
                            <label class="flex items-center cursor-pointer">
                                <input x-on:change="toggleClassification(classification.id)" type="checkbox"
                                    class="form-checkbox h-4 w-4 text-blue-600"
                                    :id="`classification_${classification.id}`">
                                <span x-text="classification.name" class="ml-2"></span>
                            </label>
                        </template>
                    </div>
                </div>

                <!-- Price Range -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Rango de Precio</h3>
                    <div class="space-y-4">
                        <input type="range" min="0" max="1000" x-model="priceRangeBar"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        $ 0 - $ <span x-text="priceRangeBar"></span>
                        {{-- <div class="flex gap-4">
                            <input type="number" placeholder="Min" class="w-full px-3 py-2 border rounded-md">
                            <input type="number" placeholder="Max" class="w-full px-3 py-2 border rounded-md">
                        </div> --}}
                    </div>
                </div>

                <!-- Brands -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Marcas</h3>
                    <input type="text" x-model="brandSearch" placeholder="Buscar Marcas"
                        class="w-full px-3 py-2 border rounded-md mb-3">
                    <div class="space-y-2 max-h-40 overflow-y-auto">
                        <template x-for="brand in filteredBrands" :key="brand.id">
                            <label class="flex items-center cursor-pointer">
                                <input x-on:change="toggleBrand(brand.id)" type="checkbox"
                                    class="form-checkbox h-4 w-4 ml-1 text-blue-600" :id="`brand_${brand.id}`">
                                <span x-text="brand.name" class="ml-2"></span>
                            </label>
                        </template>
                    </div>
                </div>

                <!-- Discounts -->
                {{-- <div class="mb-6"> <!-- No se si se iba a usar entonces lo comento --> 
                    <h3 class="font-medium mb-4">Descuentos</h3>
                    <div class="space-y-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">10% de descuento</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">20% de descuento</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">50% de descuento</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Liquidacion</span>
                        </label>
                    </div>
                </div> --}}
            </div>

            <!-- Product Grid -->
            <div class="lg:w-3/4 flex flex-col flex-grow max-h-[200vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    {{-- <div class="flex items-center gap-4">
                        <button class="p-2 bg-white rounded-md border hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <button class="p-2 bg-white rounded-md border hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div> --}}
                    <select class="px-4 py-2 border rounded-md bg-white w-2/8" x-model="sortOption"
                        @change="sortProducts">
                        <option value="0" selected disabled>Ordenar por:</option>
                        <option value="name">Nombre</option>
                        <option value="priceLtH">Precio: Bajo a Alto</option>
                        <option value="priceHtL">Precio: Alto a Bajo</option>
                        <option value="newest">Los más nuevos primero</option>
                    </select>
                </div>

                <!-- Product Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 {{-- flex-grow --}}">
                    <template x-for="product in filteredProducts" :key="product.id">
                        <a :href="'/products/' + product.id">
                            <div
                                class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e" alt="Product"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center gap-2">
                                            <template x-if="product.is_featured">
                                                <i class="fa-solid fa-star text-yellow-400"></i>
                                            </template>
                                            <template x-if="product.is_best_seller">
                                                <i class="fa-solid fa-medal text-blue-500"></i>
                                            </template>
                                            <template x-if="product.is_new_from_stock">
                                                <i class="fa-solid fa-box text-green-500"></i>
                                            </template>
                                        </div>
                                        {{-- <div class="flex text-yellow-400">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                </path>
                                            </svg>
                                            {{-- <span class="text-gray-600 text-sm ml-1">4.5</span> 
                                        </div> --}}
                                    </div>
                                    <h3 class="text-xl text-gray-900 mb-2" x-text="product.name"></h3>
                                    <h3 class="text-base text-gray-600 mb-2" x-text="product.brand.name"></h3>
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold text-gray-900"
                                            x-text="'$' + product.price"></span>
                                        <button class="bg-blue-600 text-white px-2 py-2 rounded-md hover:bg-blue-700">
                                            Añadir a la Cotización
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="relative w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                                <a href="#">
                                    <img class="h-50 w-96 rounded-t-lg object-cover"
                                        src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                        alt="product image" />
                                </a>
                                <span
                                    class="absolute top-6 left-6 w-28 -translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">
                                    Sale
                                </span>
                                <div class="mt-4 px-4 sm:px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-lg sm:text-xl font-semibold tracking-tight text-slate-900">
                                            a
                                        </h5>
                                    </a>

                                    <div class="mt-2.5 mb-5 flex items-center gap-1 sm:gap-2">
                                        <span
                                            class="mr-2 rounded bg-yellow-200 px-2 py-0.5 text-xs sm:text-sm font-semibold">
                                            5.0
                                        </span>
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg aria-hidden="true"
                                                class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6 text-yellow-300"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <p>
                                            <span class="text-2xl sm:text-3xl font-bold text-slate-900">$249</span>
                                            <span class="text-sm sm:text-base text-slate-900 line-through">$299</span>
                                        </p>
                                        <a href="#"
                                            class="flex items-center rounded-md bg-slate-900 px-4 sm:px-5 py-2 sm:py-2.5 text-center text-xs sm:text-sm font-medium text-white hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 sm:h-6 sm:w-6"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </template>
                </div>

                {{-- <div class="relative w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="#">
                        <img class="h-50 w-96 rounded-t-lg object-cover"
                            src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="product image" />
                    </a>
                    <span
                        class="absolute top-6 left-6 w-28 -translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">
                        Sale
                    </span>
                    <div class="mt-4 px-4 sm:px-5 pb-5">
                        <a href="#">
                            <h5 class="text-lg sm:text-xl font-semibold tracking-tight text-slate-900">
                                a
                            </h5>
                        </a>

                        <div class="mt-2.5 mb-5 flex items-center gap-1 sm:gap-2">
                            <span class="mr-2 rounded bg-yellow-200 px-2 py-0.5 text-xs sm:text-sm font-semibold">
                                5.0
                            </span>
                            @for ($i = 0; $i < 5; $i++)
                                <svg aria-hidden="true" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6 text-yellow-300"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            @endfor
                        </div>

                        <div class="flex items-center justify-between">
                            <p>
                                <span class="text-2xl sm:text-3xl font-bold text-slate-900">$249</span>
                                <span class="text-sm sm:text-base text-slate-900 line-through">$299</span>
                            </p>
                            <a href="#"
                                class="flex items-center rounded-md bg-slate-900 px-4 sm:px-5 py-2 sm:py-2.5 text-center text-xs sm:text-sm font-medium text-white hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 sm:h-6 sm:w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div> --}}

                <!-- Pagination -->
                <div class="justify-center mt-8 hidden">
                    <nav class="flex items-center gap-2">
                        <button class="px-3 py-2 rounded-md bg-white border hover:bg-gray-50">Previous</button>
                        <button class="px-3 py-2 rounded-md bg-blue-600 text-white">1</button>
                        <button class="px-3 py-2 rounded-md bg-white border hover:bg-gray-50">2</button>
                        <button class="px-3 py-2 rounded-md bg-white border hover:bg-gray-50">3</button>
                        <button class="px-3 py-2 rounded-md bg-white border hover:bg-gray-50">Next</button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function sidebar() {
                return {
                    sidebarOpen: true,
                    products: @json($products).map(product => ({
                        id: product.id,
                        name: product.name,
                        price: product.price,
                        brand: product.brand,
                        type: product.type,
                        unit: product.unit,
                        image_path: product.image_path,
                        price: product.price,
                        sku: product.sku,
                        is_featured: product.is_featured,
                        is_new_from_stock: product.is_new_from_stock,
                        is_best_seller: product.is_best_seller,
                        classification_id: product.type.classification_id,
                    })),
                    classifications: @json($classifications),
                    brands: @json($brands),
                    brandSearch: '',
                    selectedClassifications: [],
                    selectedBrands: [],
                    sortOption: "0",

                    get filteredProducts() {
                        return this.products.filter(product => {
                            const withinPrice = product.price <= this.priceRangeBar + 1;
                            const inSelectedClassifications = this.selectedClassifications.length === 0 ||
                                this.selectedClassifications.includes(product.type?.classification_id ?? null);
                            const inSelectedBrands = this.selectedBrands.length === 0 ||
                                this.selectedBrands.includes(product.brand.id ?? null);

                            return withinPrice && inSelectedClassifications && inSelectedBrands;
                        });
                    },

                    sortByName() {
                        this.products.sort((a, b) => a.name.localeCompare(b.name));
                    },

                    sortByPriceLtH() {
                        this.products.sort((a, b) => a.price - b.price);
                    },

                    sortByPriceHtL() {
                        this.products.sort((a, b) => b.price - a.price);
                    },

                    sortByNewest() {
                        this.products.sort((a, b) => b.is_new_from_stock - a.is_new_from_stock);
                    },

                    sortProducts() {
                        if (this.sortOption === 'name') {
                            this.sortByName();
                        } else if (this.sortOption === 'priceLtH') {
                            this.sortByPriceLtH();
                        } else if (this.sortOption === 'priceHtL') {
                            this.sortByPriceHtL();
                        } else if (this.sortOption === 'newest') {
                            this.sortByNewest();
                        }
                    },

                    get filteredBrands() {
                        return this.brands.filter(b => {
                            return (`${b.name}`)
                                .toLowerCase()
                                .includes(this.brandSearch.toLowerCase());
                        });
                    },

                    toggleClassification(id) {
                        if (this.selectedClassifications.includes(id)) {
                            this.selectedClassifications = this.selectedClassifications.filter(c => c !== id);
                        } else {
                            this.selectedClassifications.push(id);
                        }
                        this.selectedClassifications.forEach(c => {
                            console.log(c);
                        })
                        console.log(this.filteredProducts)
                    },

                    toggleBrand(id) {
                        if (this.selectedBrands.includes(id)) {
                            this.selectedBrands = this.selectedBrands.filter(b => b !== id);
                        } else {
                            this.selectedBrands.push(id);
                        }
                    },

                    priceRangeBar: 200,

                    cleanFilters() {
                        this.cleanCategories();
                        this.cleanBrands();
                        this.priceRangeBar = 200;
                    },

                    cleanCategories() {
                        console.log("Clearing Categories")
                        this.selectedClassifications.forEach(c => {
                            document.getElementById("classification_" + c).checked = false;
                        });
                        this.selectedClassifications = [];
                    },

                    cleanBrands() {
                        this.selectedBrands.forEach(b => {
                            document.getElementById("brand_" + b).checked = false;
                        });
                        this.selectedBrands = [];
                    },
                };
            }
        </script>
    @endpush
</x-home-layout>
