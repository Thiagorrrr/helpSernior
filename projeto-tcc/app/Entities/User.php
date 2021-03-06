<?php

namespace App\Entities;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table   = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'name',
        'phone',
        'birth',
        'gender',
        'notes',
        'email',
        'rua',
        'cep',
        'numero',
        'estado',
        'municipio',
        'titular',
        'ncartao',
        'dtvalidade',
        'bandeira',
        'securycode',
        'image',
        'cobranca',
        'funcao',
        'salario',
        'descri',
        'terms',
        'password', 
        'status',
        'permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password']= env("PASSWORD_HASH") ? bcrypt($value): $value;
    }
}



 