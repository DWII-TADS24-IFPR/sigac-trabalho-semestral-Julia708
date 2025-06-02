<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes';
    protected $fillable = ['user_id', 'descricao', 'carga_horaria', 'arquivo', 'status'];

    // Relacionamento com Aluno
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

}
