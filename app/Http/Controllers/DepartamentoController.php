<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos= Departamento::orderBy('nome','asc')->get();
        
        return view('page.departamento.cadastrodeptmento',compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
          
        $departamento = Departamento::create([
            'nome' => $req->name,
        ]);


        if ($departamento) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
        

        $departamento= Departamento::orderBy('nome','asc')->get();
        return view('page.departamento.cadastrodeptmento',compact('departamento'));
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        Departamento::find($id)->delete();
        return redirect()->back()->with('success','');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {       
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        Departamento::find($id)->update([
            'nome' => $req->name,  
        ]);

        return redirect()->back()->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
