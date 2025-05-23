<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Declaracao;
use App\Models\Comprovante;
use App\Models\Aluno;

class DeclaracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $declaracoes = Declaracao::all();
        return view('declaracoes.index')->with('declaracoes', $declaracoes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();

        return view('declaracoes.create', compact('alunos', 'comprovantes'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Declaracao::create([
            'hash' => $request->hash,
            'data' => $request->data,
            'aluno_id' => $request->aluno_id,
            'comprovante_id' => $request->comprovante_id,
        ]);

        return redirect()->route('declaracoes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $declaracao = Declaracao::findOrFail($id);
        return view('declaracoes.show', compact('declaracao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $declaracao = Declaracao::findOrFail($id);
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.edit', compact('declaracao', 'alunos', 'comprovantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $declaracao = declaracao::findOrFail($id);
        $declaracao->update($request->only('nome', 'max_horas', 'aluno_id', 'comprovante_id'));

        return redirect()->route('declaracoes.index')->with('success', 'declaracao atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $declaracao = declaracao::findOrFail($id);
        $declaracao->delete();

        return redirect()->route('declaracoes.index')->with('success', 'declaracao atualizada com sucesso!');
    }
}