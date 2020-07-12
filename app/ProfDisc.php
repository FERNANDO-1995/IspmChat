<?php

namespace App;
use App\Disciplina;
use App\Professor;
use Illuminate\Database\Eloquent\Model;

class ProfDisc extends Model
{
    protected $fillable = ['disciplina_id','professor_id'];

    public function professor(){
        return $this->belongsTo('App\Professor','professor_id','nif');
    }
    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
    public function turmad(){
        return $this->hasMany('App\ProfDisc','pd_id');
    }
}
