<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    
    protected $table = 'administradores';
    protected $fillable = ['nome', 'email', 'senha', 'role_id'];


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
