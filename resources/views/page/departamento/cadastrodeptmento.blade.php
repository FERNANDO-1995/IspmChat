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
                                <h4 class="text-dark">Lista de Departamento</h4>
                            </div>
                            <button type="button" class="btn btn-info col-md-2 col-sm-12 col-lg-2" data-toggle="modal" data-target="#myModalthree">Cadastrar</button>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Data</th>
                                        <th>Acções</th>  
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                            @foreach($departamentos as $departamento)
                                
                                    <tr>
                                        <td>{{$departamento->nome}}</td>
                                        <td>{{ $departamento->created_at }}</td>
                                        <td>

                                        <a href="" data-toggle="modal" data-target="#editar_{{ $departamento->id }}" title="Editar" > <span class="fa fa-edit" style="font-size: 26px; margin-right: 10px;"></span> </a>
                                            <a href="{{route('deptmento.show',$departamento->id)}}" title="Apagar" class="text-danger"> <span class="fa fa-trash" style="font-size: 26px;"></span> </a>
                                        </td>
                                    </tr>

                @include('page.departamento.editar')  
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
@include('page.departamento.formulario');   
@endsection
