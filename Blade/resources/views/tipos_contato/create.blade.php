<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold leading-tight text-gray-800 mb-4">
                    Novo Tipo de Contato
                </h2>

                <form method="POST" action="{{ route('tipos_contato.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nome:</label>
                        <input type="text" name="nome" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Descrição:</label>
                        <textarea name="descricao" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Salvar</button>
                        <a href="{{ route('tipos_contato.index') }}" class="text-blue-600 hover:underline">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
