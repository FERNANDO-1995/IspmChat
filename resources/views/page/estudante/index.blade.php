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
                                <h4 class="text-dark">Lista de Estudantes do Curso de {{$curso->nome}}</h4>
                            </div>
                            <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#myModalthree">Cadastrar</button>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Name</th>
                                        <th>Ano Academico</th>
                                        <th>Curso</th>
                                        <th>Turma</th>
                                        <th>data</th>
                                        <th>Acções</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($estudante as $item)
                                   
                                   <tr>
                                       <td>{{ $item->numero }}</td>
                                       <td>{{ $item->fullname }}</td>
                                       <td>{{ $item->anoacad }}º ANO</td>
                                       <td>{{ $item->curso->nome }}</td>
                                       <td>{{ $item->turma->nome }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                        <a  data-toggle="modal" data-target="#edit{{$item->id}}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                           <a href="{{route('estudante.show',$item->id) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px;"></span> </a>
                                        </td>
                                       
                                   </tr>
                                   @include('page.estudante.edit');
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
  @include('page.estudante.create'); 
   
    
   
@endsection