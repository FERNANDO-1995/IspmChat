<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable=['nif','fullname','grau_acad', 	'email','formacao', 'telefone' ,'user_id'];
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
