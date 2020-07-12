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
                            @if(Auth::user()->categoria=="Admin" || Auth::user()->categoria=="Gestor")
                                <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#Professor">Cadastrar</button>
                            @else
                                <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#AddProfessor">Adicionar</button>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIF</th>
                                        <th>Name Completo</th>
                                        <th>Grao Académico</th>
                                        <th>Area de Formação</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(Auth::user()->categoria=="Admin" || Auth::user()->categoria=="Gestor")
                                    @foreach ($professor as $item)
                                        
                                            <tr>
                                                <td>{{ $item->nif }}</td>
                                                <td>{{ $item->fullname }}</td>
                                                <td>{{ $item->grau_acad }}</td>
                                                <td>{{ $item->formacao }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->telefone }}</td>
                                                <td>
                                                    <a href="" data-toggle="modal" data-target="#edit_{{ $item->nif }}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                                    <a href="{{ route('professor.show',$item->nif) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px;"></span> </a>
                                                </td>
                                                
                                            </tr>
                                            @include('page.Professor.edit')
                                    @endforeach
                                    @else
                                        @foreach ($professor as $item)
                                            
                                                <tr>
                                                    <td>{{ $item->prof->nif }}</td>
                                                    <td>{{ $item->prof->fullname }}</td>
                                                    <td>{{ $item->prof->grau_acad }}</td>
                                                    <td>{{ $item->prof->formacao }}</td>
                                                    <td>{{ $item->prof->email }}</td>
                                                    <td>{{ $item->prof->telefone }}</td>
                                                    <td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#disc_{{$item->prof->nif }}" title="Add Disciplina" > <span class="fa fa-book" style="font-size: 20px; margin-right: 5px;"></span> </a>
                                                        <a href="" data-toggle="modal" data-target="#list_{{$item->prof->nif }}" title="mostrar Disciplina" > <span class="fa fa-eye" style="font-size: 20px; margin-right: 5px;"></span> </a>
                                                        <a href="{{ route('professor.prof.elim',$item->id) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 20px;"></span> </a>
                                                    </td>
                                                </tr>
                                                @include('page.Professor.profdiscturma')
                                                @include('page.Professor.listadisc')
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
    <!-- Data Table area End-->
                
                
            </div>
        </div>
    </div>
   @include('page.Professor.cadastro')
   @include('page.Professor.profAdd')
@endsection