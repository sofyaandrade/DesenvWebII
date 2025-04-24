<?php

namespace App\Http\Controllers;

use App\Models\TipoContato;
use Illuminate\Http\Request;

class TipoContatoController extends Controller
{
    // Lista todos os tipos
    public function index()
    {
        $tipos = TipoContato::all();
        return view('tipos_contato.index', compact('tipos'));
    }

    // Exibe formulário de criação
    public function create()
    {
        return view('tipos_contato.create');
    }

    // Salva um novo tipo no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable'
        ]);

        TipoContato::create($request->all());

        return redirect()->route('tipos_contato.index')->with('success', 'Tipo de Contato criado com sucesso!');
    }

    // Exibe formulário de edição
    public function edit(TipoContato $tipos_contato)
    {
        return view('tipos_contato.edit', ['tipo' => $tipos_contato]);
    }

    // Atualiza os dados no banco
    public function update(Request $request, TipoContato $tipos_contato)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable'
        ]);

        $tipos_contato->update($request->all());

        return redirect()->route('tipos_contato.index')->with('success', 'Tipo de Contato atualizado com sucesso!');
    }

    // Exclui o registro
    public function destroy(TipoContato $tipos_contato)
    {
        $tipos_contato->delete();

        return redirect()->route('tipos_contato.index')->with('success', 'Tipo de Contato removido com sucesso!');
    }
}

