<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['nome','ano','departamento_id'];

    public function departamento(){
        return $this->belongsTo('App\Departamento','departamento_id');
    }
    public function estudante(){
        return $this->hasMany('App\Estudante','curso_id','id');
    }
}
