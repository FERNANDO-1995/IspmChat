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
                                <h4 class="text-dark"></h4>
                            </div>
                            @if (Auth::user()->categoria!="Estudante")
                            <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#myModalthree">Novo Forum</button>
                                
                            @endif
                        </div>
                            @foreach ($publicacao as $item)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        
                                      <h4 class="card-title ">{{$item->titulo}}</h4>
                                      <p class="card-text" style="font-size: 15px; text-align: justify;line-height: 30px;">{{ mb_strimwidth($item->conteudo, 0, 150, "...")}}</p>
                                      @foreach ($item->arquivo as $ite)
                                            <a href="{{ asset('assets/arquivos/'.$ite->file) }}" download="{{$ite->file}}"   title="{{$ite->descricao}}" > <span class="fa fa-file-pdf-o " aria-hidden="true" style="font-size: 30px; margin-right: 5px;color: rgb(253, 75, 75)"></span> </a>
                                        @endforeach
                                        <br>
                                        <small>
                                            <b>
                                                @if (Auth::user()->categoria!="Estudante")
                                                    Disciplina: {{$item->turmped->pd->disciplina->nome}}
                                                    Turma :  {{$item->turmped->turma->nome}}
                                                @else
                                                    Prof: {{$item->turmped->pd->professor->fullname}}
                                                    Disciplina: {{$item->turmped->pd->disciplina->nome}}
                                                    
                                                @endif
                                            </b>
                                        </small><br>
                                        <span  class="badge" >Publicado {{Carbon\Carbon::parse($item->created_at)->locale('pt-pt')->diffForHumans()}}</span>
                                        <p class="text-right">
                                            @if (Auth::user()->categoria!="Estudante")
                                            <a href="{{ route('publicacao.edit',$item->id) }}" style="background-color: rgba(245, 4, 4, 0.747)" class="badge"> <small>
                                            </small> deletar</a>  
                                            @endif
                                            <a href="{{ route('publicacao.show',$item->id) }}" style="background-color: rgba(10, 146, 236, 0.747)" class="badge"> <small style="border-radius: 100%; padding:4px; background-color:white; color:black; width: 20px; height: 20px;">{{ App\Comentario::where('publicacao_id',$item->id)->count() }}</small> Comentarios</a>
                                        </p>
                                        </div>
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>         
                            @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
                
                
            </div>
        </div>
    </div>
    @if (Auth::user()->categoria!="Estudante")
    @include('page.publicacao.create'); 
    @endif
   
@endsection