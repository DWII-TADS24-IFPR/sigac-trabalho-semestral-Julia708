<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'turma_id', 'curso_id'];

    public function turma(){
        return $this -> belongsTo(Turma::class);
    }

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function comprovantes(){
        return $this -> hasMany(Comprovante::class);
    }

    public function declaracoes(){
        return $this -> hasMany(Declaracao::class);
    }
}
