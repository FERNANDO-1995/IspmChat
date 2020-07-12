<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfDepart extends Model
{
    protected $fillable = ['id_dep','id_prof'];

    public function prof(){
        return $this->belongsTo('App\Professor','id_prof','nif');
    }
    public function depart(){
        return $this->belongsTo('App\Departamento','id_dep');
    }
}
