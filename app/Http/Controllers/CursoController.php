<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->categoria == "Admin" || Auth::user()->categoria == "Gestor")
        {
            $curso = Curso::all();
        }
        else{
            $curso = Curso::where("departamento_id",Auth::user()->id_dep)->orderBy('id','DESC')->paginate(10);
        }
        return view('page.curso.curso',compact('curso'));
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
        $dados = $req->except('_token');
        $dados['departamento_id'] = Auth::user()->id_dep;
        $curso = Curso::create($dados);
        if ($curso) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->back()->with('success','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->except('_token');
        $valor = Curso::find($id)->update($dados);
        if ($valor) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
