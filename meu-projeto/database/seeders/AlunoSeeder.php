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
            'senha' => bcrypt('senha456'),
            'turma_id' => 2,
            'curso_id' => 2
        ]);

        Aluno::table('alunos')->insert([
            [
                'nome' => 'Fernanda Silva',
                'cpf' => '555.666.777-88',
                'email' => 'fernanda@exemplo.com',
                'senha' => bcrypt('senha123'),
                'user_id' => 1,
                'curso_id' => 1,
                'turma_id' => 1,
            ],
        ]);

    }
}
