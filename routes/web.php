<?php

use Illuminate\Support\Facades\Route;
use App\Turma;
use App\TurmaProfDisc;
use App\Publicacao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    

    Route::group(['middleware'=>'auth'],function(){
        Route::get('/', function () {
            if(Auth::guest()){
                return view('auth.login');
            }else{
                if(Auth::user()->categoria == "Admin" || Auth::user()->categoria=="Gestor"){
                     return view('page.inicio');
                }else{
                    if(Auth::user()->categoria == "Coordenador" || Auth::user()->categoria=="Chefe de Departamento"){
                        return view('page.inicio2');
                    }else{
                        if(Auth::user()->categoria == "Professor"){
                            return view('page.inicio3');
                        }else{
                            $prof=TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->pluck('id');
                            $publicacao = Publicacao::whereIn('turma_prof_disc_id',$prof)->orderBy('id','desc')->limit(2)->get();
                            return view('page.inicio4',compact('publicacao'));
                        }
                    }
                }
            }
        })->name('inicio');
        Route::resource('/usuario', 'UsuarioController');
        Route::resource('/curso', 'CursoController');
        Route::resource('/disciplina', 'DisciplinaController');
        Route::resource('/professor', 'ProfessorController');
        Route::resource('/turma', 'TurmaController');

        //Lista de Turmas
        Route::get('Curso/Turma/{id}',function($id){
            $turma = Turma::where('curso_id',$id)->orderBy('nome','asc')->get();
            return view('page.turma.index',compact('turma','id'));
        })->name('turma.add');

        Route::resource('/estudante', 'EstudanteController');
        Route::resource('/cursodis', 'CursoDiscController');
        Route::resource('/publicacao', 'PublicacaoController');
        Route::resource('/comentario', 'ComentarioController');
        Route::post('professor/add',"ProfessorController@add")->name('professor.add');
        Route::post('professor/addisc',"ProfessorController@addisciplina")->name('professor.addisc');

        Route::get('professsor/Eliminar/{id}','ProfessorController@eliminar')->name('professor.prof.elim');

        Route::get('/cadastrardeptmento','DepartamentoController@index');
        Route::resource('/deptmento','DepartamentoController');
        Route::resource('mochila','ArquivoController');
        include_once('admin.php');

    });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
