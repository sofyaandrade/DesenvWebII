<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold leading-tight text-gray-800 mb-4">
                    Tipos de Contato
                </h2>

                <div class="mb-4">
                    <a href="{{ route('tipos_contato.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Novo Tipo de Contato
                    </a>
                </div>

                @include('tipos_contato.show')
            </div>
        </div>
    </div>
</x-app-layout>
