<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = auth()->user();

    if ($user->role->id === 1) {
        $alunos = Aluno::with('turma', 'curso')->get();
    } else {
        $alunos = Aluno::with('turma', 'curso')
            ->where('user_id', $user->id)
            ->get();
    }

    return view('alunos.index', compact('alunos'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();

        return view('alunos.create', compact('cursos', 'turmas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // Validação dos dados
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'cpf' => 'required|string|unique:alunos,cpf',
        'senha' => 'required|string|min:6|confirmed',
        'curso_id' => 'required|exists:cursos,id',
        'turma_id' => 'required|exists:turmas,id',
    ]);

    // Cria o usuário
    $user = User::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'senha' => Hash::make($request->senha),
        'role_id' => 2, // 2 = Aluno
        'curso_id' => $request->curso_id,
    ]);

    // Cria o aluno, vinculando com o usuário
    Aluno::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'email' => $request->email,
        'senha' => Hash::make($request->senha),
        'user_id' => $user->id,
        'curso_id' => $request->curso_id,
        'turma_id' => $request->turma_id,
    ]);

    return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        $aluno = Aluno::findOrFail($user_id);
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $cursos = Curso::all();
        $turmas = Turma::with('curso')->get();
        return view('alunos.edit', compact('aluno', 'cursos', 'turmas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->only('nome', 'cpf', 'email', 'curso_id', 'turma_id'));

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
