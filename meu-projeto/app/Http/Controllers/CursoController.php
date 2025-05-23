<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Nivel;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nivels = Nivel::all();

        return view('cursos.create', compact('nivels'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        curso::create([
            'nome' => $request->nome,
            'sigla' => $request->sigla,
            'total_horas' => $request->total_horas,
            'nivel_id' => $request->nivel_id,
        ]);

        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = curso::findOrFail($id);
        $nivels = Nivel::all();
        return view('cursos.edit', compact('curso', 'nivels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = curso::findOrFail($id);
        $curso->update($request->only('nome', 'sigla', 'total_horas', 'nivel_id'));

        return redirect()->route('cursos.index')->with('success', 'curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index')->with('success','Curso excluido com sucesso');
    }
}
