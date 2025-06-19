<x-app-layout>
    <div class="bg-gray-100 flex items-center justify-center h-96">

        <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Cadastro</h1>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('store.appointments') }}">
                @csrf

                <div class="mb-4">
                    <label for="customer" class="block font-medium text-sm text-gray-700">Cliente</label>
                    <select name="customer_id"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option selected disabled>Selecione um cliente</option>
                        @foreach($customers as $id => $name)
                            <option value="{{$id}}">{{$name}}</option>
                        @endforeach

                    </select>

                    @error('customer_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="appointment_date" class="block font-medium text-sm text-gray-700">Data:</label>
                    <input type="date" id="appointment_date" name="appointment_date" value="{{ old('appointment_date') }}"
                           class="mt-1 block w-full border-gray-300 rounded shadow-sm">

                    @error('appointment_date')
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
