<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    protected $table = 'comprovantes';
    protected $fillable = ['horas', 'atividade', 'categoria_id', 'user_id'];

    
    
    public function aluno(){
        return $this -> belongsTo(Aluno::class);
    }

    public function categoria(){
        return $this -> belongsTo(Categoria::class);
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function declaracoes(){
        return $this -> hasMany(Declaracao::class);
    }
}
