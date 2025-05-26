<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            ['nome' => 'Análise e Desenvolvimento de Sistemas', 'sigla' => 'ADS', 'total_horas' => 200, 'nivel_id' => 1, 'eixo_id' => 1],
        ]);

    }
}
