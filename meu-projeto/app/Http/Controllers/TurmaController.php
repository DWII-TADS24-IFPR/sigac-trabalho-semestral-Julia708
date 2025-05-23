<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();

        return view('turmas.create', compact('cursos'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        turma::create([
            'ano' => $request->ano,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('turmas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = turma::findOrFail($id);
        return view('turmas.show', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::findOrFail($id);
        $cursos = Curso::all();
        return view('turmas.edit', compact('turma', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = turma::findOrFail($id);
        $turma->update($request->only('ano', 'curso_id'));

        return redirect()->route('turmas.index')->with('success', 'turmas atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::findOrFail($id);
        $turma->delete();

        return redirect()->route('turmas.index');
    }
}
