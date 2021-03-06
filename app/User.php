<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Departamento;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'categoria', 'id_dep','file',
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

    public function departamento(){

        return $this->belongsTo('App\Departamento', 'id_dep');
        
    }
    public function estudante(){
        return $this->hasOne('App\Estudante','user_id');
    }

    public function professor(){
        return $this->hasOne('App\Professor','user_id');
    }
    public function mensagemr(){
        return $this->hasMany('App\Mensagem','destino','id');
    }
}
