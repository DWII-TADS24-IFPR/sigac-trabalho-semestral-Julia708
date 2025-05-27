<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\User;

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

    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'cpf' => 'required|string|unique:alunos,cpf',
        'password' => 'required|string|min:6|confirmed',
        'curso_id' => 'required|exists:cursos,id',
        'turma_id' => 'required|exists:turmas,id',
    ]);

    $user = User::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => 2,
    ]);

    Aluno::create([
        'user_id' => $user->id,
        'cpf' => $request->cpf,
        'curso_id' => $request->curso_id,
        'turma_id' => $request->turma_id,
    ]);

    Auth::login($user);

    return redirect()->route('home')->with('success', 'Aluno cadastrado com sucesso!');
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
    public function edit(string $user_id)
    {
        $aluno = Aluno::findOrFail($user_id);
        $user = User::findOrFail($user_id);
        $cursos = Curso::all();
        $turmas = Turma::with('curso')->get();
        return view('alunos.edit', compact('aluno', 'cursos', 'turmas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id)
    {
    $user = User::findOrFail($user_id);
    $user->update($request->only('nome', 'email'));

    $aluno = Aluno::where('user_id', $user_id)->firstOrFail();
    $aluno->update($request->only('cpf', 'curso_id', 'turma_id'));

    return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return redirect()->route('alunos.index');
    }
}
