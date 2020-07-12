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
                                <h4 class="text-dark">Lista dos Estudantes</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Name</th>
                                        <th>Ano Academico</th>
                                        <th>Turma</th>
                                        <th>Turno</th>
                                        <th>Curso</th>
                                        <th>data</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach (App\Estudante::all() as $item)
                                    <tr>
                                        <td>{{ $item->numero }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->turma->ano }}º ANO</td>
                                        <td>{{ $item->turma->nome }}</td>
                                        <td>{{ $item->turma->periodo }}</td>
                                        <td>{{ $item->turma->curso->nome }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
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
   
    
   
@endsection