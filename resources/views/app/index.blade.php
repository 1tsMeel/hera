<x-home-layout>

    <section class="px-3 py-5 bg-neutral-100 lg:py-10">
        <div class="grid lg:grid-cols-2 items-center justify-items-center gap-5">
            <div class="order-2 lg:order-1 flex flex-col justify-center items-center text-center">
                <p class="text-4xl font-bold md:text-7xl text-orange-600">25% OFF</p>
                <p class="text-4xl font-bold md:text-7xl">SUMMER SALE</p>
                <p class="mt-2 text-sm md:text-lg">For a limited time only!</p>
                <a href="#shop" class="text-lg md:text-2xl bg-black text-white py-2 px-5 mt-10 hover:bg-zinc-800">Shop
                    Now</a>
            </div>
            <div class="order-1 lg:order-2">
                <img class="h-80 w-80 object-cover lg:w-[500px] lg:h-[500px] rounded-lg"
                    src="https://images.unsplash.com/photo-1615397349754-cfa2066a298e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1887&q=80"
                    alt="Summer Sale Product">
            </div>
        </div>
    </section>


    {{-- <div class="swiper mySwiper relative w-full">
        <div class="swiper-wrapper flex w-full max-w-xs rounded-lg border border-gray-100 bg-white shadow-md">
            @foreach ($products as $product)
                <div class="swiper-slide ">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover"
                            src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="product image" />
                        <span
                            class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">39%
                            OFF</span>
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$449</span>
                                <span class="text-sm text-slate-900 line-through">$699</span>
                            </p>
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span
                                    class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                            </div>
                        </div>
                        <a href="#"
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div> --}}

    {{--  <div
        class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
            <img class="object-cover"
                src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt="product image" />
            <span
                class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">39%
                OFF</span>
        </a>
        <div class="mt-4 px-5 pb-5">
            <a href="#">
                <h5 class="text-xl tracking-tight text-slate-900">Nike Air MX Super 2500 - Red</h5>
            </a>
            <div class="mt-2 mb-5 flex items-center justify-between">
                <p>
                    <span class="text-3xl font-bold text-slate-900">$449</span>
                    <span class="text-sm text-slate-900 line-through">$699</span>
                </p>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                </div>
            </div>
            <a href="#"
                class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Add to cart</a>
        </div>
    </div> --}}


    <div class="swiper mySwiper container py-10 w-full max-w-screen-xl mx-auto px-4 md:px-10">
        <div class="mb-10">
            <div class="mb-8 text-3xl font-medium leading-normal sm:text-4xl sm:leading-relaxed">Productos <span
                    class="rounded-xl bg-secondary px-4 py-0.5 text-white">Destacados</span></div>
        </div>
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide relative w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="{{ route('products.show', $product) }}">
                        <img class="h-50 w-96 rounded-t-lg object-cover"
                            src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="product image" />
                    </a>
                    <span
                        class="absolute top-6 left-6 w-28 -translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">
                        Sale
                    </span>
                    <div class="mt-4 px-4 sm:px-5 pb-5">
                        <a href="{{ route('products.show', $product) }}">
                            <h5 class="text-lg sm:text-xl font-semibold tracking-tight text-slate-900">
                                {{ $product->name }}
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
                                <span class="text-2xl sm:text-3xl font-bold text-slate-900">{{ $product->price }}</span>
                                <span class="text-sm sm:text-base text-slate-900 line-through">$299</span>
                            </p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                <input type="hidden" value="1" id="quantity" name="quantity">

                                <button
                                    class="flex items-center rounded-md bg-slate-900 px-4 sm:px-5 py-2 sm:py-2.5 text-center text-xs sm:text-sm font-medium text-white hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 sm:h-6 sm:w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <!-- Paginación y navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper mySwiper container py-10 w-full max-w-screen-xl mx-auto px-4 md:px-10">
        <div class="mb-10">
            <div class="mb-8 text-3xl font-medium leading-normal sm:text-4xl sm:leading-relaxed">Productos <span
                    class="rounded-xl bg-secondary px-4 py-0.5 text-white">Destacados</span></div>
        </div>
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide relative w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="{{ route('products.show', $product) }}">
                        <img class="h-50 w-96 rounded-t-lg object-cover"
                            src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="product image" />
                    </a>
                    <span
                        class="absolute top-6 left-6 w-28 -translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">
                        Sale
                    </span>
                    <div class="mt-4 px-4 sm:px-5 pb-5">
                        <a href="{{ route('products.show', $product) }}">
                            <h5 class="text-lg sm:text-xl font-semibold tracking-tight text-slate-900">
                                {{ $product->name }}
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
                            <form action="{{ route('cotizacion.store') }}" method="POST">
                                {{-- proteccion csrf --}}
                                <button type="submit"
                                    class="flex items-center rounded-md bg-slate-900 px-4 sm:px-5 py-2 sm:py-2.5 text-center text-xs sm:text-sm font-medium text-white hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 sm:h-6 sm:w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <!-- Paginación y navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>



    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 26,
            centeredSlides: false, // Evita que las tarjetas se alineen en el centro
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>


</x-home-layout>
