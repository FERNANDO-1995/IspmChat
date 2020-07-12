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
                                <h4 class="text-dark">Lista de Professores</h4>
                            </div>
                        </div>
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th  style="width: 97px;" >Nome</th>
                                            <th style="width: 97px;">Acções</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @if(Auth::user()->categoria=="Estudante")
                                            @foreach ($turma as $use)
                                                <tr>
                                                <td >{{ $use->pd->professor->fullname }}</td>
                                    
                                                    <td>
                                                
                                                        <a href="{{ route('mensa.chat',$use->pd->professor->user->id) }}"  title="Conversar" > <span style="font-size: 26px; margin-right: 10px;" class="notika-icon notika-chat" ></span> </a>
                                                    </td>                              
                                                </tr>
        
                                            @endforeach
                                        @endif
                                        @php
                                            $i=1
                                        @endphp
                                        @if(Auth::user()->categoria=="Professor")
                                            @foreach ($prof as $use) 
                                                <tr>
                                                    <td >{{ $use->turma->nome }}</td>
                                                    <td>
                                                        <a href="#Monstar_{{ $use->turma->id }}" data-toggle="modal"  title="Conversar" > <span style="font-size: 26px; margin-right: 10px;" class="notika-icon notika-eye" ></span> </a>
                                                    </td>                              
                                                </tr>
                                                @include('page.mensagem.criar')
                                            @endforeach
                                        @endif
                                    </tbody>
                                  
                                </table>
                            </div>
                          </div>
                        
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