<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Conversión de Temperatura
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <form method="POST" action="{{ route('temperatura.convertir') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="fahrenheit">Temperatura en Fahrenheit:</label>
                        <input type="text" name="fahrenheit" class="w-full rounded border-gray-300">
                    </div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        Convertir
                    </button>
                </form>

                @isset($celsius)
                    <div class="mt-4">
                        <p><strong>Fahrenheit:</strong> {{ $fahrenheit }} °F</p>
                        <p><strong>Celsius:</strong> {{ $celsius }} °C</p>
                        <p><strong>Kelvin:</strong> {{ $kelvin }} K</p>
                    </div>
                @endisset
            </div>
        </div>
    </div>
</x-app-layout>
