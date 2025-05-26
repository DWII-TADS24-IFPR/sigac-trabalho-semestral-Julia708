<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resources';
    protected $fillable = ['nome'];

    public function permissoes(){
        return $this -> hasMany(Permissao::class);
    }
}
