<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['user_id', 'cpf', 'role_id', 'turma_id', 'curso_id'];

     public function user(){
        return $this -> belongsTo(User::class);
    }

    public function turma(){
        return $this -> belongsTo(Turma::class);
    }

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function role() {
    return $this->belongsTo(Role::class);
    }

    public function comprovantes(){
        return $this -> hasMany(Comprovante::class);
    }

    public function declaracoes(){
        return $this -> hasMany(Declaracao::class);
    }

}
