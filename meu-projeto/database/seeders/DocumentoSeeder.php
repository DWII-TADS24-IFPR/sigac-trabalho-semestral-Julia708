<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documentos')->insert([
    [
        'url' => 'documentos/palestra.pdf',
        'descricao' => 'Comprovante de participação em palestra',
        'horas_in' => 10,
        'status' => 'pendente',
        'comentario' => '',
        'horas_out' => null,
        'categoria_id' => 1,
        'user_id' => 1,
    ],
]);

    }
}
