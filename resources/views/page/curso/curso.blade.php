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
                                <h4 class="text-dark">Lista de Cursos</h4>
                            </div>
                            @if(Auth::user()->categoria !="Admin" && Auth::user()->categoria!="Gestor")
                                <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#Cadastro_Curso">Cadastrar</button>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Anos de Frequência</th>
                                        <th>Departamento</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                              @foreach ($curso as $item)
                                   
                                    <tr>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->ano }}</td>
                                        <td>{{ $item->departamento->nome }}</td>
                                        
                                        
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#edit_{{ $item->id }}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                            <a href="{{ route('curso.show',$item->id) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                            @if(Auth::user()->categoria != "Admin" && Auth::user()->categoria != "Gestor")
                                            
                                                <a href="{{ route('turma.add',$item->id) }}" title="Adicionar Turmas" class="text-info"><span class="fa fa-university" style="font-size: 26px;margin-right: 10px;"></span>  </a>
                                                <a href="{{ route('estudante.edit',$item->id) }}" title="Adicionar Estudante" class="text-info"><span class="fa fa-user" style="font-size: 26px;margin-right: 10px;"></span>  </a>
                                                <a href="{{ route('cursodis.edit',$item->id) }}" title="Adicionar Disciplinas" class="text-warning"><span class="fa fa-book" style="font-size: 26px;"></span>  </a>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                    @include('page.curso.edit')
                               @endforeach   
                                   
                                    
                                    
                                </tbody>
                              
                            </table>
                            
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
   @include('page.curso.create'); 
   
    
   
@endsection