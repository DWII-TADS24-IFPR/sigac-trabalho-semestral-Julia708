<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['nome', 'email', 'password', 'role'];

    public function role(){
    return $this->belongsTo(Role::class);
    }

    public function documentos(){
    return $this->hasMany(Documento::class);
    }

    public function comprovantes(){
    return $this->hasMany(Comprovante::class);
    }

}
