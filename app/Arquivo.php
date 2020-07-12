<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
     protected $fillable = ['file','publicacao_id','descricao'];
    
    public function publicacao(){
        return $this->belongsTo('App\Publicacao','publicacao_id');
    }
}
