<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'nome' => 'Mariana Smith',
            'cpf' => '987.654.321-00',
            'email' => 'mariana@exemplo.com',
            'senha' => bcrypt('senha456'),
            'turma_id' => 2,
            'curso_id' => 2
        ]);

        Aluno::create([
            'nome' => 'Carlos Silva',
            'cpf' => '111.222.333-44',
            'email' => 'carlos@exemplo.com',
            'senha' => bcrypt('carlos123'),
            'turma_id' => 3,
            'curso_id' => 3
        ]);

        Aluno::create([
            'nome' => 'Fernanda Costa',
            'cpf' => '555.666.777-88',
            'email' => 'fernanda@exemplo.com',
            'senha' => bcrypt('fernanda123'),
            'turma_id' => 5,
            'curso_id' => 2
        ]);

        Aluno::create([
            'nome' => 'João Pedro',
            'cpf' => '999.888.777-66',
            'email' => 'joao@exemplo.com',
            'senha' => bcrypt('joao123'),
            'turma_id' => 2,
            'curso_id' => 1
        ]);
    }
}
