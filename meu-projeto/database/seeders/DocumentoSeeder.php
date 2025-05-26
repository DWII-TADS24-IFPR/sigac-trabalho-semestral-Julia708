<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documento::create([
            'url' => 'documentos/palestra.pdf',
            'descricao' => 'Comprovante de participação em palestra',
            'horas_in' => 10,
            'status' => 'pendente',
            'comentario' => '',
            'horas_out' => 20,
            'categoria_id' => 1,
        ]);

    }
}
