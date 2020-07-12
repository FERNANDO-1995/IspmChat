<?php

namespace App\Http\Controllers;

use App\Publicacao;
use Illuminate\Http\Request;
use App\Professor;
use Auth;
use App\Arquivo;
use App\ProfDisc;
use App\TurmaProfDisc;
use App\Comentario;
class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espects=0;
        
        if (Auth::user()->categoria=="Estudante") {
            $prof=TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->pluck('id');
        } else {
            $prof=ProfDisc::where('professor_id',Auth::user()->professor->nif)->pluck('id');
            $prof=TurmaProfDisc::whereIn('pd_id',$prof)->pluck('id');
        }
        
        

        $publicacao = Publicacao::whereIn('turma_prof_disc_id',$prof)->orderBy('id','desc')->get();
      
       
        return view('page.publicacao.index',compact('publicacao','espects'));
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
      
        $publicacao = Publicacao::create([
            'titulo' => $req->titulo,
            'conteudo' => $req->conteudo,
            'turma_prof_disc_id' => $req->turma_prof_disc_id,
            
        ]);
        if ($publicacao) {

            $nameFile = null;
            
            if ($req->file!=null)  {
                foreach($req->file as $arquivo){
                   // if ($arquivo->hasFile('file') ) {
                    
                        $name = uniqid(date('HisYmd'));
                        $extension = $arquivo->extension();
                        $nameFile = "{$name}.{$extension}";
                        $upload = $arquivo->storeAs('arquivos', $nameFile);
                        if ($upload ){
                            $arquiv = Arquivo::create([
                                'file' => $nameFile,
                                'publicacao_id' => $publicacao->id,
                                'descricao' => $arquivo,
                                
                            ]); 
                        }
    
                   // }
                }
            }

            return redirect()->back()->with('success','');
        } else {
            return redirect()->back()->with('error','');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacao = Publicacao::find($id);
        return view('page.publicacao.show',compact('publicacao','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        Publicacao::find($id)->delete();
        return redirect()->back()->with('success','');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacao $publicacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacao $publicacao)
    {
        //
    }
}
