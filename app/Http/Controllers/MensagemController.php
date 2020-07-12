<?php

namespace App\Http\Controllers;

use App\Mensagem;
use App\User;
use App\Professor;
use App\ProfDepart;
use App\ProfDisc;
use App\TurmaProfDisc;
use Auth;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if(Auth::user()->categoria=="Estudante"){
            $turma = TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->get();
            return view('page.mensagem.iniciar',compact('turma'));
        }
        if(Auth::user()->categoria=="Professor"){
            $prof=ProfDisc::where('professor_id',Auth::user()->professor->nif)->pluck('id');
            $prof=TurmaProfDisc::whereIn('pd_id',$prof)->get();
            return view('page.mensagem.iniciar',compact('prof'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $mensagem = Mensagem::create([
            'mensagem' => $req->mensagem,
             'file'    => null,
             'origem' => Auth::user()->id,
             'destino' => $req->prof
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function show(Mensagem $mensagem)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensagem $mensagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensagem $mensagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensagem $mensagem)
    {
        //
    }
}
