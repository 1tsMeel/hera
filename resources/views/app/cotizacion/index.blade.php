<x-home-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8 mt-8">
        <!-- Encabezado -->
        <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Cotización</h1>
                <p class="text-gray-600">Fecha: <span class="font-semibold">10/10/2023</span></p>
            </div>
            <div class="text-right">
                <h2 class="text-xl font-semibold text-gray-800">Tienda XYZ</h2>
                <p class="text-gray-600">Calle Falsa 123, Ciudad</p>
                <p class="text-gray-600">Tel: +52 123 456 7890</p>
            </div>
        </div>

        <!-- Información del Cliente -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Cliente:</h3>
            <p class="text-gray-600">Nombre: <span class="font-semibold">Juan Pérez</span></p>
            <p class="text-gray-600">Correo: <span class="font-semibold">juan.perez@example.com</span></p>
            <p class="text-gray-600">Teléfono: <span class="font-semibold">+52 987 654 3210</span></p>
        </div>

        <!-- Detalles de la Cotización -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Detalles de la Cotización</h3>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 text-left text-gray-700">Producto</th>
                            <th class="py-2 px-4 text-left text-gray-700">Cantidad</th>
                            <th class="py-2 px-4 text-left text-gray-700">Precio Unitario</th>
                            <th class="py-2 px-4 text-left text-gray-700">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 px-4 text-gray-700">Producto 1</td>
                            <td class="py-2 px-4 text-gray-700">2</td>
                            <td class="py-2 px-4 text-gray-700">$100.00</td>
                            <td class="py-2 px-4 text-gray-700">$200.00</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 px-4 text-gray-700">Producto 2</td>
                            <td class="py-2 px-4 text-gray-700">1</td>
                            <td class="py-2 px-4 text-gray-700">$150.00</td>
                            <td class="py-2 px-4 text-gray-700">$150.00</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 px-4 text-gray-700">Producto 3</td>
                            <td class="py-2 px-4 text-gray-700">3</td>
                            <td class="py-2 px-4 text-gray-700">$50.00</td>
                            <td class="py-2 px-4 text-gray-700">$150.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Resumen de la Cotización -->
        <div class="mt-6">
            <div class="flex justify-end">
                <div class="w-1/3">
                    <div class="flex justify-between py-2">
                        <span class="text-gray-700">Subtotal:</span>
                        <span class="text-gray-700">$500.00</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-700">Impuestos (16%):</span>
                        <span class="text-gray-700">$80.00</span>
                    </div>
                    <div class="flex justify-between py-2 border-t border-gray-200">
                        <span class="text-gray-800 font-semibold">Total:</span>
                        <span class="text-gray-800 font-semibold">$580.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notas -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Notas:</h3>
            <p class="text-gray-600">Esta cotización es válida por 30 días a partir de la fecha de emisión.</p>
        </div>

        <!-- Pie de Página -->
        <div class="mt-8 text-center text-gray-600">
            <p>Gracias por su preferencia. Para cualquier duda, contáctenos.</p>
            <p>Tienda XYZ - <a href="https://www.tienda-xyz.com" class="text-blue-500">www.tienda-xyz.com</a></p>
        </div>
    </div>
</x-home-layout>
