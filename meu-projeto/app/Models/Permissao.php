<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissoes';
    protected $fillable = ['resource_id', 'role_id', 'permissao'];

    public function resource(){
        return $this -> belongsTo(Resource::class);
    }

    public function role(){
        return $this -> belongsTo(Role::class);
    }
}
