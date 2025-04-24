@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<ul class="divide-y divide-gray-200">
    @foreach ($tipos as $tipo)
        <li class="py-4 flex justify-between items-center">
            <div>
                <p class="text-lg font-semibold text-gray-900">{{ $tipo->nome }}</p>
                <p class="text-sm text-gray-600">{{ $tipo->descricao }}</p>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('tipos_contato.edit', $tipo->id) }}" class="text-indigo-600 hover:underline">Editar</a>

                <form action="{{ route('tipos_contato.destroy', $tipo->id) }}" method="POST" onsubmit="return confirm('Deseja excluir este tipo de contato?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
