@extends('Template.base')
@section('ispm')
<div class="notika-status-area">
        <div class="container">
            <div class="row">
                
               <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd row">
                            <div class="col-md-10 col-sm-12 col-lg-10 col-xl-10">
                                <h4 class="text-dark">Meu Prefil</h4>
                             
                            </div>
                            <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#editar{{Auth::user()->id}}">Editar Perfil</button>
                        </div>
                       
                        <div class="row"> 
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contact-list sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                                        <div class="contact-win">
                                            <img  style="border-radius: 10px; border: solid thick rgb(0, 195, 255);" border-radius: 10px; src="{{ asset('assets/arquivos/'.Auth::user()->file) }}" alt="">
                                        </div>
                                        <div class="contact-ctn">
                                            <div class="contact-ad-hd">
                                                <h2>Nome:</h2>
                                                <p class="ctns-ads">{{Auth::user()->name}}</p>
                                            </div>
                                            
                                        </div>
                                        <div class="social-st-list">
                                            <div class="social-sn">
                                                <h2>Categoria:</h2>
                                                <p>{{Auth::user()->categoria}}</p>
                                            </div>
                                            <div class="social-sn">
                                                <h2></h2>
                                                <p></p>
                                            </div>
                                            <div class="social-sn">
                                                <h2>Email:</h2>
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="tpgp-helper mg-t-30">
                                        <div class="tpgp-hp-hd typography-mgn">
                                            @if (Auth::user()->categoria =="Estudante") 
                                            <h2 class="mn-hd-s">Dados Académicos</h2>
                                               </div>

                                                <div class="tpgp-al-cl">

                                                <div class="social-st-list">
                                                    <div class="social-sn">
                                                        <h2>Telefone: </h2>
                                                        <p>{{Auth::user()->estudante->telefone}}</p>
                                                    </div>
                                                    <div class="social-sn">
                                                        <h2>B.I.: </h2>
                                                        <p>{{Auth::user()->estudante->bi}}</p>
                                                    </div>
                                                </div>
                                                <div class="social-st-list">
                                                    <div class="social-sn">
                                                        <h2>Género:</h2>
                                                        <p>{{Auth::user()->estudante->genero}}</p>
                                                    </div>
                                                    <div class="social-sn">
                                                        <h2>Curso: </h2>
                                                        <p>{{Auth::user()->estudante->turma->curso->nome}}</p>
                                                    </div>
                                                </div>
                                                <div class="social-st-list">
                                                    <div class="social-sn">
                                                        <h2>Turma:</h2>
                                                        <p>{{Auth::user()->estudante->turma->nome}}</p>
                                                    </div>
                                                    <div class="social-sn">
                                                        <h2>Ano de FrequÊncia: </h2>
                                                        <p>{{Auth::user()->estudante->turma->ano}} º Ano</p>
                                                    </div>
                                                </div>
                                                <div class="social-st-list">
                                                    <div class="social-sn">
                                                        <h2>Período:</h2>
                                                        <p>{{Auth::user()->estudante->turma->periodo}}</p>
                                                    </div>
     
                                                </div>
                                        </div>
                                      @endif
                                 @if (Auth::user()->categoria =="Professor")  
                                      <h2 class="mn-hd-s">Informações profissionais</h2>
                                      <div class="tpgp-al-cl">

                                       <div class="social-st-list">
                                           <div class="social-sn">
                                               <h2>Telefone: </h2>
                                               <p>{{Auth::user()->professor->telefone}}</p>
                                           </div>
                                           <div class="social-sn">
                                               <h2>NIF: </h2>
                                               <p>{{Auth::user()->professor->nif}}</p>
                                           </div>
                                       </div>
                                       <div class="social-st-list">
                                           <div class="social-sn">
                                               <h2>Minhas Turmas:</h2>
                                               @foreach (App\ProfDisc::where('professor_id',Auth::user()->professor->nif )->orderBy("id","ASC")->get() as $it)
                                               <p>{{$it->disciplina->nome}}</p> 
                                               
                                               @endforeach
                                           </div>   
                                    </div>
                               @endif
                        
                                    </div>
                                </div>
                        </div>
                     @include('page.perfil.editar')
 
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
                   
            </div>
        </div>
    </div>
   
   
@endsection

 