<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comprovante;

class ComprovanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comprovante::create([
                'horas' => 10,
                'atividade' => 'Participação em palestra',
                'categoria_id' => 1,
                'user_id' => 1,
        ]);

    }
}
