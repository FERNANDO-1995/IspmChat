<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $fillable= ['titulo','conteudo','turma_prof_disc_id'];

    public function turmped(){
        return $this->belongsTo('App\TurmaProfDisc','turma_prof_disc_id');
    }
    public function arquivo(){
        return $this->hasMany('App\Arquivo','publicacao_id'); 
    }

    public function comentario(){
        return $this->hasMany('App\Comentario','publicacao_id'); 
    }
}
