<x-home-layout>
    <div class="card mt-2">
        <div>
            <form action="{{ route('product.importPost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input type="file" class="w-full" name="documento" />
                <button class="btn btn-blue mt-5 mb-0 uppercase" type="submit">
                    Importar
                </button>
            </form>
        </div>
    </div>
</x-home-layout>