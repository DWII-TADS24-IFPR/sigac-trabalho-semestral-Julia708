<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Categoria;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index')->with('documentos', $documentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('documentos.create', compact('categorias'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Documento::create([
            'url' => $request->url,
            'descricao' => $request->descricao,
            'horas_in' => $request->horas_in,
            'status' => $request->status,
            'comentario' => $request->comentario,
            'horas_out' => $request->horas_out,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('documentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $documento = Documento::findOrFail($id);
        return view('documentos.show', compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $documento = Documento::findOrFail($id);
        $categorias = Categoria::all();
        return view('documentos.edit', compact('documento', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $documento = Documento::findOrFail($id);
        $documento->update($request->only('url', 'descricao', 'horas_in', 'status', 'comentario', 'horas_out', 'categoria_id'));

        return redirect()->route('documentos.index')->with('success', 'documento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();

        return redirect()->route('documentos.index');
    }
}