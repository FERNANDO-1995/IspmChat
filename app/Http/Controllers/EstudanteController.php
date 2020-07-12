<?php

namespace App\Http\Controllers;

use App\Estudante;
use Illuminate\Http\Request;
use App\Turma;
use App\Curso;
use App\User;
class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return view('page.estudante.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $usuarios = User::create([
            'name' => $req->fullname,
            'email' => $req->email,
            'categoria' => "Estudante",
            'password' =>bcrypt('12345678'), 
            
        ]);

            $estudante = Estudante::create([
                'numero' => $req->numero,
                'fullname' => $req->fullname,
                'turno' => $req->turno,
                'data_nasc' => $req->data_nasc,
                'genero' => $req->genero,
                'anoacad' => $req->anoacad,
                'user_id' => $usuarios->id,
                'curso_id' => $req->curso_id,
                'turma_id' => $req->turma_id,
            ]);

           
            if ($estudante) {
                return redirect()->back()->with('success','');
            } else {
                return redirect()->back()->with('error','');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $estudante= Estudante::find($id);
       $iduser=$estudante->user_id;
       $estudante= $estudante->delete();
       if ($estudante) {
        User::find($iduser)->delete();
        return redirect()->back()->with('success','');

       } else {
        return redirect()->back()->with('error','');
           
       }
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=Curso::find($id);
       $turno=["Manhã","Tarde","Noite"];
         $turma = Turma::where('curso_id',$curso->id)->orderBy('nome','asc')->get();
       $estudante= Estudante::where('curso_id',$id)->orderBy('fullname','asc')->get();
        return view('page.estudante.index',compact('turno','curso','turma','estudante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $estudante = Estudante::find($id)->update([
            'numero' => $req->numero,
            'fullname' => $req->fullname,
            'turno' => $req->turno,
            'data_nasc' => $req->data_nasc,
            'genero' => $req->genero,
            'anoacad' => $req->anoacad, 
            'turma_id' => $req->turma_id,
        ]);
        if ($estudante) {
            return redirect()->back()->with('success','');
        } else {
            $usuarios->delete();
            return redirect()->back()->with('error','');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
}
