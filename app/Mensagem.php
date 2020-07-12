<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $fillable = [
        'mensagem','file','origem','destino',
    ];

    public function destinos(){
        return $this->belongsTo('App\User','destino','id');
    }

    public function origens(){
        return $this->belongsTo('App\User','origem','id');
    }
}
