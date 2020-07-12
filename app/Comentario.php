<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Publicacao;
class Comentario extends Model
{
    protected $fillable=['conteudo','publicacao_id','user_id'];

    public function publicacao(){
        return $this->belongsTo('App\Publicacao');
    }

    public function usuario(){
        return $this->belongsTo('App\User','user_id');
    }
   
}
