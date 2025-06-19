<x-app-layout>
    <div class="bg-gray-100 flex items-center justify-center h-96">

        <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Cadastro</h1>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('store.customers') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block font-medium text-sm text-gray-700">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                           class="mt-1 block w-full border-gray-300 rounded shadow-sm">

                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block font-medium text-sm text-gray-700">Telefone:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                           class="mt-1 block w-full border-gray-300 rounded shadow-sm">

                    @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                    Cadastrar
                </button>
            </form>
        </div>

    </div>
</x-app-layout>
