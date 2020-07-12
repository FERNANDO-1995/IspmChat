<div class="modal fade" id="myModalthree" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Usuário</h2>
        <div class="row">
        <form method="POST" action="{{route('usuario.store')}}">
        @csrf
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="name" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="bi" class="form-control" placeholder="Bilhete de Identidade">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" name="telefone" class="form-control" placeholder="Telefone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="email" class="form-control" placeholder="e-mail">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                                @if(Auth::user()->categoria == "Chefe de Departamento") 
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select name="categoria" class="selectpicker form-control" data-live-search="true">
                                                @foreach($categoria as $c)
                                                    @if($c == "Coordenador")
                                                        <option value="{{$c}}">{{$c}}</option>
                                                    @endif
                                                @endforeach
                                                </select>
                                        </div>
                                    </div>
                                @endif
                                @if(Auth::user()->categoria == "Gestor" || Auth::user()->categoria == "Admin")
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select name="categoria" class="selectpicker form-control" data-live-search="true">
                                                @foreach($categoria as $c)
                                                    @if($c != "Coordenador")
                                                        <option value="{{$c}}">{{$c}}</option>
                                                    @endif
                                                @endforeach
                                                </select>
                                        </div>
                                    </div>
                                @endif
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="id_dep" class="selectpicker form-control" data-live-search="true">
                                        <option value="NULL">Selecione o Departamentos</option>
                                        @foreach($departamento as $d)
                                                <option value="{{$d->id}}">{{$d->nome}}</option>
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