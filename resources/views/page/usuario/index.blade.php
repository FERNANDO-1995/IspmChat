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
                                <h4 class="text-dark">Lista de Usuários</h4>
                            </div>
                            <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#myModalthree">Cadastrar</button>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Categoria</th>
                                        <th>Departamento</th>
                                        <th>data</th>
                                        <th>Acções</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::user()->categoria=="Chefe de Departamento")
                                        @foreach ($usuarios as $usuario)
                                            @if ($usuario->categoria =="Coordenador" && $usuario->id_dep ==Auth::user()->id_dep)
                                                <tr>
                                                    <td>{{ $usuario->name }}</td>
                                                    <td>{{ $usuario->email }}</td>
                                                    <td>{{ $usuario->categoria }}</td>
                                                    @if($usuario->id_dep != NULL)
                                                        <td>{{ $usuario->departamento->nome }}</td>
                                                    @else
                                                        <td>Sem Departamento</td>
                                                    @endif
                                                    <td>{{ $usuario->created_at }}</td>
                                                    <td>
                                                        @if($usuario->categoria != "Estudante")
                                                            <a href="" data-toggle="modal" data-target="#edit_{{ $usuario->id }}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                                            <a href="{{route('usuario.show',$usuario->id) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px;"></span> </a>
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                            @endif

                                        @include('page.usuario.edit')
                                        @endforeach   
                                    @endif

                                    @if (Auth::user()->categoria !="Chefe de Departamento")
                                    @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>{{ $usuario->name }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>{{ $usuario->categoria }}</td>
                                                @if($usuario->id_dep != NULL)
                                                    <td>{{ $usuario->departamento->nome }}</td>
                                                @else
                                                    <td>Sem Departamento</td>
                                                @endif
                                                <td>{{ $usuario->created_at }}</td>
                                                <td>
                                                    @if($usuario->categoria != "Estudante" && $usuario->categoria !="Coordernador" )
                                                        <a href="" data-toggle="modal" data-target="#edit_{{ $usuario->id }}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                                        <a href="{{route('usuario.show',$usuario->id) }}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px;"></span> </a>
                                                    @endif
                                                </td>
                                                
                                            </tr>
                                    @include('page.usuario.edit')
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
   @include('page.usuario.create'); 
   
    
   
@endsection