<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::create([
            'nome' => 'Análise e Desenvolvimento de Sistemas', 
            'sigla' => 'ADS', 
            'total_horas' => 200, 
            'nivel_id' => 1, 
            'eixo_id' => 1,
        ]);

    }
}
