<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolicitacaoController extends Controller
{
    public function index()
    {
        $solicitacoes = Solicitacao::with('aluno')->get();
        return view('solicitacoes.index', compact('solicitacoes'));
    }

    public function create()
    {
        return view('solicitacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string',
            'carga_horaria' => 'required|integer|min:1',
            'arquivo' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $arquivoPath = null;

        if ($request->hasFile('arquivo')) {
            $arquivoPath = $request->file('arquivo')->store('comprovantes', 'public');
        }

        Solicitacao::create([
            'user_id' => auth()->id(),
            'descricao' => $request->descricao,
            'carga_horaria' => $request->carga_horaria,
            'arquivo' => $arquivoPath,
            'status' => 'pendente', 
        ]);

        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação enviada com sucesso!');
    }

    public function show(Solicitacao $solicitacao)
    {
        return view('solicitacoes.show', compact('solicitacao'));
    }

    public function update(Request $request, Solicitacao $solicitacao)
    {
        $request->validate([
            'status' => 'required|in:aprovada,rejeitada,pendente',
        ]);

        $solicitacao->update(['status' => $request->status]);

        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação atualizada com sucesso!');
    }

    // Excluir uma solicitação (opcional)
    public function destroy(Solicitacao $solicitacao)
    {
        if ($solicitacao->arquivo) {
            Storage::disk('public')->delete($solicitacao->arquivo);
        }

        $solicitacao->delete();

        return redirect()->back()->with('success', 'Solicitação excluída.');
    }
}
