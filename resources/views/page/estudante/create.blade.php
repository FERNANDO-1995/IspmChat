<div class="modal fade" id="myModalthree" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Estudante</h2>
        <div class="row">
        <form method="POST" action="{{route('estudante.store')}}">
        @csrf
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="numero" class="form-control" placeholder="Número de Matricula">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="fullname" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="date" name="data_nasc" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="turno" class="selectpicker form-control" data-live-search="true">
                                    @foreach($turno as $item)
                                                <option value="{{$item}}">{{$item}}</option>
                                    @endforeach
										</select>
                                </div>
                            </div>

                           

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                              <div class="bootstrap-select fm-cmp-mg">
                                  <select name="genero" class="selectpicker form-control" data-live-search="true">
                                  
                                              <option value="masculino">Masculino</option>
                                              <option value="feminino">Feminino</option>
                                     
                                      </select>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                              <div class="bootstrap-select fm-cmp-mg">
                                  <select name="turma_id" class="selectpicker form-control" data-live-search="true">
                                  <option value="null" >Seleccione a Turma</option>
                                  @foreach($turma as $item)
                                              <option value="{{$item->id}}">{{$item->nome}}</option>
                                      @endforeach
                                      </select>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                              <div class="bootstrap-select fm-cmp-mg">
                                  <select name="anoacad" class="selectpicker form-control" data-live-search="true">
                                  <option value="null" >Ano Academico</option>
                                 
                                              <option value="1">1º Ano</option>
                                              <option value="2">2º Ano</option>
                                              <option value="3">3º Ano</option>
                                              <option value="4">4º Ano</option>
                                              <option value="5">5º Ano</option>
                                              <option value="6">6º Ano</option>
                                      
                                      </select>
                              </div>
                          </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="email" class="form-control" placeholder="e-mail">
                                        <input type="text" name="curso_id" class="hidden" value="{{$curso->id}}">
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