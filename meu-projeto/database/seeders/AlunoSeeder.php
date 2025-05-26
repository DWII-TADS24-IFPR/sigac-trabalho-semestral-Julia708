<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'nome' => 'Mariana Costa',
            'cpf' => '987.654.321-00',
            'email' => 'mariana@exemplo.com',
            'senha' => bcrypt('senha556'),
            'user_id' => 2,
            'curso_id' => 2,
            'turma_id' => 2,
        ]);
    }
}
