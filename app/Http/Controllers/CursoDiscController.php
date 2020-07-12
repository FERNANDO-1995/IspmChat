<?php

namespace App\Http\Controllers;

use App\CursoDisc;
use App\Curso;
use App\Disciplina;
use Illuminate\Http\Request;

class CursoDiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
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
    public function store(Request  $req)
    {

        $cursodisc = CursoDisc::create([
            'disciplina_id' => $req->disciplina_id,
            'curso_id' => $req->curso_id,
            'descricao' => $req->descricao,
            
        ]);
        if ($cursodisc) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CursoDisc  $cursoDisc
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        CursoDisc::find($id)->delete();
        return redirect()->back()->with('success','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CursoDisc  $cursoDisc
     * @return \Illuminate\Http\Response
     */
    public function edit(CursoDisc $cursoDisc, $id)
    {
        $curso=Curso::find($id);
        $disciplina=Disciplina::orderBy('nome','asc')->get();
        $cursodisc=CursoDisc::Where('curso_id',$id)->orderBy('id','desc')->get();
        //
        return view('page.cursodisc.index',compact('curso','disciplina','cursodisc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CursoDisc  $cursoDisc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $cursodisc = CursoDisc::find($id)->update([
            'disciplina_id' => $req->disciplina_id,
            'descricao' => $req->descricao,
            
        ]);
        if ($cursodisc) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CursoDisc  $cursoDisc
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursoDisc $cursoDisc)
    {
        //
    }
}
