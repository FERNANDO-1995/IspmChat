<div class="modal fade" id="edit_{{ $usuario->id }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Departamento</h2>
        <div class="row">
        <form method="POST" action="{{route('usuario.update',$usuario->id) }}">
            @method('PUT')
        @csrf
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="name" value="{{$usuario->name}}" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="bi" value="{{$usuario->bi}}" class="form-control" placeholder="Bilhete de Identidade">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="telefone" value="{{$usuario->telefone}}" class="form-control" placeholder="Telefone">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="email" value="{{$usuario->email}}" class="form-control" placeholder="e-mail">
                                    </div>
                                </div>
                            </div>

                           

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="categoria" class="selectpicker form-control" data-live-search="true">
                                    @foreach($categoria as $c)
                                                <option value="{{$c}}"
                                                @if($c == $usuario->categoria)
                                                 selected
                                                @endif
                                                >{{$c}}</option>
                                        @endforeach
										</select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="id_dep" class="selectpicker form-control" data-live-search="true">
                                    <option value="0">Selecione o Departamentos</option>
                                    @foreach($departamento as $d)
                                            <option value="{{$d->id}}" 
                                                @if($d->id == $usuario->id_dep)
                                                 selected
                                                @endif
                                             >{{$d->nome}}</option>
                                    @endforeach
											
										</select>
                                </div>
                            </div>
        </div>
     </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
     </form>
    </div>
 </div>