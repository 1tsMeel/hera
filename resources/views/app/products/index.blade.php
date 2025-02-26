<x-home-layout>
    <div class="container mx-auto px-4 py-8 flex flex-col min-h-screen">
        <div class="flex flex-col lg:flex-row gap-8 flex-grow">
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4 bg-white p-6 rounded-lg shadow-sm h-fit">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold">Filtros</h2>
                    <button class="text-blue-600 text-sm hover:text-blue-800">Limpiar todos</button>
                </div>

                <!-- Categories -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Categories</h3>
                    <div class="space-y-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Jaladeras</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Chapas</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Bisagras</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Nose</span>
                        </label>
                    </div>
                </div>

                <!-- Price Range -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Rango de Precio</h3>
                    <div class="space-y-4">
                        <input type="range" min="0" max="1000"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        <div class="flex gap-4">
                            <input type="number" placeholder="Min" class="w-full px-3 py-2 border rounded-md">
                            <input type="number" placeholder="Max" class="w-full px-3 py-2 border rounded-md">
                        </div>
                    </div>
                </div>

                <!-- Brands -->
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Marcas</h3>
                    <input type="text" placeholder="Buscar Marcas" class="w-full px-3 py-2 border rounded-md mb-3">
                    <div class="space-y-2 max-h-40 overflow-y-auto">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Handy Home</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Herrasa</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2">Yale</span>
                        </label>
                    </div>
                </div>

                <!-- Discounts -->
                <div class="mb-6">
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
                </div>
            </div>

            <!-- Product Grid -->
            <div class="lg:w-3/4 flex flex-col flex-grow">
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-4">
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
                    </div>
                    <select class="px-4 py-2 border rounded-md bg-white">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                    </select>
                </div>

                <!-- Product Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 flex-grow">
                    @foreach ($products as $product)
                        <a href="{{ route('products.show', $product) }}">
                            <div
                                class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e" alt="Product"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center gap-2">
                                            @if ($product->is_featured)
                                                <i class="fa-solid fa-star text-yellow-400"></i>
                                            @endif
                                            @if ($product->is_best_seller)
                                                <i class="fa-solid fa-medal text-blue-500"></i>
                                            @endif
                                            @if ($product->is_new_from_stock)
                                                <i class="fa-solid fa-box text-green-500"></i>
                                            @endif
                                        </div>
                                        <div class="flex text-yellow-400">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                </path>
                                            </svg>
                                            <span class="text-gray-600 text-sm ml-1">4.5</span>
                                        </div>
                                    </div>
                                    <h3 class="font-medium text-gray-900 mb-2">{{ $product->name }}</h3>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="text-lg font-bold text-gray-900">${{ $product->price }}</span>
                                        </div>
                                        <button
                                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Añadir
                                            a la Cotización</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
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
</x-home-layout>
