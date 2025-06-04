<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Solicitacao;

class GraficoController extends Controller
{
    public function index(Request $request)
    {
        $turmas = Turma::all();

        $turma_id = $request->input('turma_id');

        $dados = [];

        if ($turma_id) {
            $alunos = Turma::findOrFail($turma_id)->alunos()->with('user')->get();

            foreach ($alunos as $aluno) {
                $horas = $aluno->solicitacoes()
                    ->where('status', 'aprovado')
                    ->sum('carga_horaria');

                $dados[] = [
                    'nome' => $aluno->user->nome,
                    'horas' => $horas,
                ];
            }
        }

        return view('graficos.index', compact('turmas', 'dados', 'turma_id'));
    }
}
