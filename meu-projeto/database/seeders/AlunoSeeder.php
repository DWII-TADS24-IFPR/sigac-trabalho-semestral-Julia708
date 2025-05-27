<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'user_id' => 1,
            'cpf' => '123-456-789-88',
            'curso_id' => 1,
            'turma_id' => 1,
        ]);
    }
}
