<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudante;
class Turma extends Model
{
    protected $fillable = [
        'nome',  'descricao','periodo','curso_id','ano',
    ];


    public function curso(){
        return $this->belongsTo('App\Curso');
    }
    public function estudante(){
        return $this->hasMany('App\Estudante','turma_id','id');
    }



}


