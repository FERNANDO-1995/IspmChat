@extends('Template.base')
@section('ispm')
<div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            Curso: <h2>{{ Auth::user()->estudante->turma->curso->nome }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                           Turno <h2>{{ Auth::user()->estudante->turma->periodo }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            Ano de Frequência<h2>{{ Auth::user()->estudante->turma->ano }}º Ano</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            Departamento <h2>{{ Auth::user()->estudante->turma->curso->departamento->nome }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Publicações Recentes</h2>
                                <a href="{{ route('publicacao.index') }}" class="btn btn-primary" ><i class="fa fa-list"> Mais...</i></a>
                            </div>
                        </div>
                         @foreach ($publicacao as $item)
                                <div class="card mb-3">
                                    <div class="card-body">
                                      <h4 class="card-title">{{$item->titulo}}</h4>
                                      <p class="card-text" style="font-size: 15px; text-align: justify;line-height: 30px;">{{ mb_strimwidth($item->conteudo, 0, 150, "...")}}</p>
                                     
                                      @foreach ($item->arquivo as $ite)
                                            <a href="{{ asset('assets/arquivos/'.$ite->file) }}" download="{{$ite->file}}"   title="{{$ite->file}}" > <span class="fa fa-file-pdf-o " aria-hidden="true" style="font-size: 30px; margin-right: 5px;color: rgb(253, 75, 75)"></span> </a>
                                        @endforeach
                                        <br>
                                        <small>
                                            @if (Auth::user()->categoria!="Estudante")
                                                Disciplina: {{$item->turmped->pd->disciplina->nome}}
                                                Turma :  {{$item->turmped->turma->nome}}
                                            @else
                                                Prof: {{$item->turmped->pd->professor->fullname}}
                                                Disciplina: {{$item->turmped->pd->disciplina->nome}}
                                                
                                            @endif
                                        </small><br>
                                        <span  class="badge" >Publicado {{Carbon\Carbon::parse($item->created_at)->locale('pt-pt')->diffForHumans()}}</span>
                                        <p class="text-right">
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
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Estudante {{ Auth::user()->estudante->fullname }}</h2>
                            <p class="" style="color: green !important;">A sua Mochila esta pronta </p>
                        </div>
                        @if(Auth::user()->categoria == "Estudante")
                            @foreach (App\TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->get() as $it)
                                @foreach (App\Publicacao::where('turma_prof_disc_id',$it->id)->orderBy('id','DESC')->limit(2)->get() as $item)
                                    @foreach ($item->arquivo as $aqui)
                                        <a href="{{ asset('assets/arquivos/'.$aqui->file) }}" download="{{$aqui->file}}"   title="{{$aqui->file}}" style="position: relative"><i style="font-size: 40px; color: rgb(253, 75, 75)" class=" fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                        <p class="card-text"><small class="text-muted"> {{Carbon\Carbon::parse($aqui->created_at)->locale('pt-pt')->diffForHumans()}}</small></p>
                                        <hr>
                                    @endforeach

                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="email-statis-inner notika-shadow">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
								<h2>Dados de Utilização</h2>
							</div>
                                <div class="contact-win">
                                    <img style="border-radius: 10px; border: solid thick rgb(0, 195, 255);" border-radius: 10px; src="{{ asset('assets/arquivos/'.Auth::user()->file) }}" alt="">
                                </div>
                                <div class="contact-ctn">
                                    <div class="contact-ad-hd">
                                        <h2>Nome:</h2>
                                        <p class="text-left">{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="social-st-list">
                                    <div class="social-sn">
                                        <h2>Categoria</h2>
                                        <p>{{Auth::user()->categoria}}</p>
                                    </div>
                                    <div class="social-sn">
                                        <h2></h2>
                                        <p></p>
                                    </div>
                                    <div class="social-sn">
                                        <h2>Email</h2>
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="recent-post-ctn">
                            <div class="recent-post-title">
                                <h2>Dados Académicos</h2>
                            </div>
                        </div>
                        <div class="recent-post-items">
                            <div class="row">
                                <div class="col-md-6 recent-post-signle rct-pt-mg-wp">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-it-ctn">
                                            <h2>Nome Completo</h2>
                                            <p>{{ Auth::user()->estudante->fullname }}</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6 recent-post-signle">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-it-ctn">
                                            <h2>Data de Nascimento</h2>
                                            <p>{{ Auth::user()->estudante->data_nasc }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class=" col-md-6 recent-post-signle">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-it-ctn">
                                            <h2>Genero</h2>
                                            <p>{{ Auth::user()->estudante->genero }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-6 recent-post-signle">
                                        <div class="recent-post-flex rct-pt-mg">
                                            <div class="recent-post-flex rct-pt-mg">
                                                <div class="recent-post-it-ctn">
                                                    <h2>B.I</h2>
                                                    <p>{{ Auth::user()->estudante->bi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class=" col-md-6 recent-post-signle">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-flex rct-pt-mg">
                                            <div class="recent-post-it-ctn">
                                                <h2>Contacto</h2>
                                                <p>{{ Auth::user()->estudante->telefone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-6 recent-post-signle">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-flex rct-pt-mg">
                                            <div class="recent-post-it-ctn">
                                                <h2>Curso</h2>
                                                <p>{{ Auth::user()->estudante->curso->nome }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=" col-md-6 recent-post-signle">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-flex rct-pt-mg">
                                            <div class="recent-post-it-ctn">
                                                <h2>Curso</h2>
                                                <p>{{ Auth::user()->estudante->turma->ano }}º Ano</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-6 recent-post-signle">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-flex rct-pt-mg">
                                            <div class="recent-post-it-ctn">
                                                <h2>Perido</h2>
                                                <p>{{ Auth::user()->estudante->turma->periodo }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post-signle">
                                <a href="{{route('usuario.create')}}">
                                    <div class="recent-post-flex rc-ps-vw">
                                        <div class="recent-post-line rct-pt-mg">
                                            <p class="" style="color: rgb(16, 109, 248)">Ver os todos</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Mensagem Recentes </h2>
                                </div>
                            </div>
                            @php
                                $i = 1;
                            @endphp
                            <div class="recent-items-inn">
                                <ul class="list-group">
                                    @foreach (Auth::user()->mensagemr->sortDesc() as $item)
                                        @if ($i <= 4)
                                            <li class="list-group-item">
                                                <p style="color: rgb(31, 127, 252)">{{ $item->mensagem }}</p>
                                                <small>por: {{ $item->origens->name }}</small>
                                            </li>
                                           @php
                                               $i++
                                           @endphp
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
    <!-- Start Realtime sts area-->
@endsection