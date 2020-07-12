<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoDisc extends Model
{
    
    protected $fillable = [
        'disciplina_id', 'curso_id', 'descricao',
    ];
    public function curso (){

        return $this->belongsTo('App\Curso');
        
    }

    public function disciplina (){

        return $this->belongsTo('App\Disciplina');
        
    }
}
