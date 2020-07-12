<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Departamento;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $categoria=["Coordenador","Chefe de Departamento","Gestor"];
        $usuarios = User::orderBy('name','asc')->get();
        $departamento= Departamento::orderBy('nome','asc')->get();
        
        return view('page.usuario.index',compact('usuarios','departamento','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.perfil.index'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $dep;
        if ($req->id_dep==0) {
            $dep=null;
        }else{
            $dep=$req->id_dep;
        }
        
        $usuarios = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'categoria' => $req->categoria,
            'telefone' => $req->telefone,
            'bi' => $req->bi,
            'password' =>bcrypt( $req->password), 
            'id_dep' => $dep,
        ]);
        if ($usuarios) {
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
        User::find($id)->delete();
        return redirect()->back()->with('success','');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {
        $nameFile = Auth::user()->file;
        $deletar= Auth::user()->file;
        $u;
       
          if ($req->file!=null)  {
            
                $name = uniqid(date('HisYmd'));
                $extension = $req->file->extension();
                $nameFile = "{$name}.{$extension}";
            }
               
                    $us= User::find($id)->update([
                        'name' => $req->name,
                        'email' => $req->email,
                        'file' => $nameFile,
                    ]);
                
                

               if ($us) {
               if ($req->file!=null ) {

                $upload =  $req->file->storeAs('arquivos', $nameFile);
                Storage::delete('arquivos/'.$deletar);

              }     
               } 

               return redirect()->back()->with('success','');
            
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
         User::find($id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'categoria' => $req->categoria,
            'id_dep' => $req->id_dep,
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
        
    }
}
