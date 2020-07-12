<?php
use Illuminate\Support\Facades\Route;
use App\Mensagem;
use App\User;
use App\Comentario;

Route::get('/ver','MensagemController@index');

Route::resource('/mensagem','MensagemController');

Route::get('Mensagem/chat/{id}',function($id){
    $espect = 0;
    $usuario = array();
    $i=false;
   
    if(Auth::user()->categoria =="Professor"){
        foreach(Mensagem::where('destino',Auth::user()->id)->orWhere('origem',Auth::user()->id)->get() as $mensa){
            if($mensa->destinos->id == Auth::user()->id){
                if($usuario == NULL){
                    $usuario = $mensa->origens;
                }else{
                        if($usuario->id == $mensa->origens->id){
                            $i = true;
                        }
                    
                    if($i == false){
                        $usuario = $mensa->origens;
                    }
                }
                
            }else{
                if($usuario == NULL){
                    $usuario = $mensa->destinos;
                }else{
                    
                    if($usuario->id == $mensa->destinos->id){
                        $i = true;
                    }
                    if($i == false){
                        $usuario = $mensa->destinos;
                    }
                }
            }
            $i=false;
        }
    }
    return view('page.mensagem.chat',compact('id','usuario','espect'));
})->name('mensa.chat');

Route::get('Mensagem/lista/{id}',function($id){
    $mensage = Mensagem::where('origem',Auth::user()->id)->where('destino',$id)->orWhere('origem',$id)->where('destino',Auth::user()->id)->get();
    return view('page.mensagem.lista',compact('mensage'));
})->name('mensa.lista');

Route::get('Comentario/lista/{ids}',function($ids){
    $comentario = Comentario::where('publicacao_id',$ids)->orderBy('id','asc')->get();
    return view('page.publicacao.lista',compact('comentario'));
})->name('coment.lista');

