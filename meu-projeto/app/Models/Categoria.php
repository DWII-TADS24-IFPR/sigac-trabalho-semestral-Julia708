<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome', 'max_horas', 'curso_id'];

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function documentos(){
        return $this -> hasMany(Documento::class);
    }

    public function comprovates(){
        return $this -> hasMany(Comprovate::class);
    }
}
