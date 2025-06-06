<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $primaryKey = 'user_id';
    
    public $incrementing = false;

    protected $fillable = ['user_id', 'cpf',  'turma_id', 'curso_id'];

     public function user(){
        return $this -> belongsTo(User::class);
    }

    public function turma(){
        return $this -> belongsTo(Turma::class);
    }

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function comprovantes(){
        return $this -> hasMany(Comprovante::class, 'user_id', 'user_id');
    }

    public function solicitacoes(){
        return $this -> hasMany(Comprovante::class);
    }



    public function declaracoes(){
        return $this -> hasMany(Declaracao::class);
    }

}
