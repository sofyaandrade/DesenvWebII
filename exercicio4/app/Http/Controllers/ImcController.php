<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ImcController extends Controller
{
    public function imc()
    {
        return view('imc/formulario');
    }

    public function resultadoImc(Request $request)
{
    $nome = $request->input('nome');
    $nascimento = Carbon::parse($request->input('nascimento'));
    $idade = $nascimento->age;
    $peso = (float)$request->input('peso');
    $altura = (float)$request->input('altura');

    if ($altura <= 0) {
        return back()->with('error', 'Altura inválida. Deve ser maior que zero.');
    }

    $imc = round($peso / ($altura * $altura));

    $classificacao = match (true) {
        $imc < 18.5 => 'Abaixo do peso',
        $imc < 25 => 'Peso Normal',
        $imc < 30 => 'Acima do peso (sobrepeso)',
        $imc < 35 => 'Obesidade grau I',
        $imc < 40 => 'Obesidade grau II',
        default => 'Obesidade grau III (mórbida)',
    };

    return view('imc/resultado', compact('nome', 'idade', 'peso', 'altura', 'imc', 'classificacao'));
}

}

