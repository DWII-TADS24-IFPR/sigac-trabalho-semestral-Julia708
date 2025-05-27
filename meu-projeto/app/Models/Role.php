<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nome'];

    public function permissoes(){
        return $this -> hasMany(Permissao::class);
    }

    public function users(){
        return $this -> hasMany(User::class);
    }

}
