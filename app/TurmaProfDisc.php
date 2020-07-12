<?php

namespace App;
use App\Turma;
use App\ProfDisc;
use Illuminate\Database\Eloquent\Model;

class TurmaProfDisc extends Model
{
    protected $fillable = ['turma_id','pd_id'];

    public function pd(){
        return $this->belongsTo('App\ProfDisc','pd_id');
    }
    public function turma(){
        return $this->belongsTo('App\Turma');
    }
}
 