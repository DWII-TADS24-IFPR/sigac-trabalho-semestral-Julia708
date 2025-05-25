<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissoes';
    protected $fillable = ['resource_id', 'role_id', 'permissao'];

    public function k(){
        return $this -> hasMany(k::class);
    }
}
