<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nivel;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nivels = Nivel::all();
        return view('nivels.index')->with('nivels', $nivels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nivels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Nivel::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('nivels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('nivels.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('nivels.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nivel = Nivel::findOrFail($id);
        $nivel->update($request->only('nome'));

        return redirect()->route('nivels.index')->with('success', 'nivel atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        $nivel->delete();

        return redirect()->route('nivels.index')->with('success', 'nivel atualizada com sucesso!');
    }
}