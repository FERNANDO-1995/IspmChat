<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Turma;
use App\Curso;
class Estudante extends Model
{
    protected $fillable = [
        'numero', 'fullname', 'turno', 'data_nasc', 'genero','anoacad', 'user_id', 'curso_id', 'turma_id','bi','telefone',
    ];
    public function curso (){

        return $this->belongsTo('App\Curso');
        
    }

    public function turma(){

        return $this->belongsTo('App\Turma','turma_id');
        
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

}
