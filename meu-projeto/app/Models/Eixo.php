<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eixo extends Model
{
    protected $table = 'eixos';
    protected $fillable = ['nome'];

    public function k(){
        return $this -> hasMany(k::class);
    }
}
