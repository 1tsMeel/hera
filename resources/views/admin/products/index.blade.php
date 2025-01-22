<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Productos',
    ],
]">

    <x-slot name="action">
        <a class="btn btn-blue" href="{{ route('admin.products.create') }}">
            Nuevo
        </a>
    </x-slot>

    @if ($products->count())

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Imagen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SKU
                        </th>
                        <th scope="col" class="px-6 py-3">
                            DESTACADO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NUEVO DE STOCK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            MÁS VENDIDO
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->brand->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->type->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-48 flex justify-center">
                                    <img class="object-scale-down h-24" src="{{ asset('storage/'.$item->image_path) }}" alt="{{ $item->name }}">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->sku }}
                            </td>
                            <td class="px-6 py-4">
                                <i class="fa-solid fa-{{ $item->is_featured ? 'check text-green-500' : 'xmark text-red-500' }}"></i>
                            </td>
                            <td class="px-6 py-4">
                                <i class="fa-solid fa-{{ $item->is_new_from_stock ? 'check text-green-500' : 'xmark text-red-500' }}"></i>
                            </td>
                            <td class="px-6 py-4">
                                <i class="fa-solid fa-{{ $item->is_best_seller ? 'check text-green-500' : 'xmark text-red-500' }}"></i>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.products.edit', $item) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $products->links() }}
        </div>
    @else
        <div class="flex items-center p-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium"></span> Todavía no hay características de productos registradas.
            </div>
        </div>
    @endif

</x-admin-layout>
