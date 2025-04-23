<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Cálculo de Años Bisiestos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <form method="POST" action="{{ route('bisiestos.calcular') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="anio">Año de inicio:</label>
                        <input type="text" name="anio" class="w-full rounded border-gray-300" required>
                    </div>
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                        Calcular
                    </button>
                </form>

                @isset($bisiestos)
                    <div class="mt-4">
                        <p><strong>Años bisiestos desde {{ $inicio }} hasta 2025:</strong></p>
                        <ul class="list-disc pl-6">
                            @foreach ($bisiestos as $anio)
                                <li>{{ $anio }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endisset
            </div>
        </div>
    </div>
</x-app-layout>
