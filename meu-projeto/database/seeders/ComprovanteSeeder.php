<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComprovanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comprovantes')->insert([
    [
        'horas' => 10,
        'atividade' => 'Participação em palestra',
        'categoria_id' => 1,
        'aluno_id' => 1,
        'user_id' => 1,
    ],
]);

    }
}
