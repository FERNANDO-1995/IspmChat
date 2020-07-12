<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;
use App\ProfDepart;
use Illuminate\Support\Facades\DB;
use App\User;
use App\ProfDisc;
use App\Disciplina;
use App\TurmaProfDisc;
use Auth;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->categoria == "Admin" || Auth::user()->categoria =="Gestor"){
            $professor = Professor::orderBy('fullname','DESC')->get();
        }else{
            $professor = ProfDepart::where('id_dep',Auth::user()->id_dep)->get();
        }
        return view('page.Professor.index',compact('professor'));
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
        $use = User::create([
            'name' => $dados["fullname"],
            'email' =>$req->email,
            'password' => bcrypt($req->nif),
            'categoria'=>"Professor",
            'id_dep' => NULL
        ]);

        $dados['user_id'] = $use->id;
        $prof = Professor::create($dados);
        if ($prof) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Professor::where('nif',$id)->where('email',$request->email)->first();
        $curso->delete();
        return redirect()->back()->with('success','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valor = Professor::where('nif',$id)->where('email',$request->email)->update([
            'fullname' => $request->fullname,
            'email'  => $request->email,
            'telefone'  => $request->telefone,
            'grau_acad'  => $request->grau_acad,
            'formacao'  => $request->formacao,
        ]);
        
       
      /*  $user = User::find($valor->user_id);
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->save();*/
        if ($valor) {
            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        //
    }

    public function add(Request $req){
        $professor=array();

        $professor = $req->prof;
        foreach($professor as $prof){
            $porfDe = ProfDepart::create([
                'id_dep' => Auth::user()->id_dep,
                'id_prof' => $prof
            ]);
        }

        return redirect()->back()->with('success','');
        
        
    }
    public function addisciplina(Request $req){
      
        
        $profdis = ProfDisc::where('disciplina_id',$req->disciplina_id)->where('professor_id',$req->professor_id)->first();
        if (!$profdis) {
            $profdis = ProfDisc::create([
                'disciplina_id' => $req->disciplina_id,
                'professor_id' =>  $req->professor_id,
            ]);
           
        }       
           

            if ($profdis) {
                if (!TurmaProfDisc::where('turma_id',$req->turma_id)->where('pd_id',$profdis->id)->first()) {
                    $turmaProfDisc = TurmaProfDisc::create([
                        'turma_id' => $req->turma_id,
                        'pd_id' =>  $profdis->id,
                    ]);
                    return redirect()->back()->with('success','');
                }
                return redirect()->back()->with('error','');
            } else {
                return redirect()->back()->with('error','');
            }
            
    }

    public function eliminar($id){
        ProfDepart::find($id)->delete();
        return redirect()->back()->with('success','');
    }

}
