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
                        </a>
                    </template>
                </div>

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
