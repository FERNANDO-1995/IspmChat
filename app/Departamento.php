<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable=["nome"];
    public function curso(){
        return $this->hasMany('App\Curso','departamento_id','id');
    }
}
