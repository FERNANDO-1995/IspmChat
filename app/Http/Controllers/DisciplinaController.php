<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;
use App\Departamento;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $disciplina = Disciplina::orderBy('nome','asc')->get();
        
        
        return view('page.disciplina.index',compact('disciplina'));
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

        $disciplina = Disciplina::create([
            'nome' => $req->nome,
            'caract' => $req->caract,
            'descricao' => $req->descricao,
            
        ]);
        if ($disciplina) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       Disciplina::find($id)->delete();
        return redirect()->back()->with('success','');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        Disciplina::find($id)->update([
            'nome' => $req->nome,
            'caract' => $req->caract,
            'descricao' => $req->descricao,
        ]);

        return redirect()->back()->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
