<?PHP

namespace App\Http\Controllers;

use App\Models\Comprovante;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Categoria;

class ComprovanteController extends Controller
{
    public function index()
    {
        $comprovantes = Comprovante::all();
        return view('comprovantes.index')->with('comprovantes', $comprovantes);
    }

    public function create()
    {
        $alunos = Aluno::all();
        $categorias = Categoria::all();
        return view('comprovantes.create', compact('alunos', 'categorias'));
    }

    public function store(Request $request)
    {
        Categoria::create([
        'horas' => $request->horas,
        'atividade' => $request->atividade,
        'categoria_id' => $request->categoria_id,
        'aluno_id' => $request->aluno_id,
        ]);

        return redirect()->route('comprovantes.index');
    }

    public function show($id)
    {
        $comprovante = Comprovante::findOrFail($id);
        return view('comprovantes.show')->with('comprovante', $comprovante);
    }

    public function edit($id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $alunos = Aluno::all();
        $categorias = Categoria::all();
        return view('comprovantes.edit', compact('comprovante', 'alunos', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $comprovante->update($request->only('horas', 'atividade', 'categoria_id', 'aluno_id'));

        return redirect()->route('comprovantes.index');
    }

    public function destroy($id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $comprovante->delete();

        return redirect()->route('comprovantes.index');
    }
}
