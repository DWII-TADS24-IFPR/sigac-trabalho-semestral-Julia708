<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    
    protected $table = 'administradores';
    protected $fillable = ['user_id'];


    public function user() {
    return $this->belongsTo(User::class);
    }

    public function comprovantes(){
        return $this -> hasMany(Comprovante::class);
    }

    public function declaracoes(){
        return $this -> hasMany(Declaracao::class);
    }

}
