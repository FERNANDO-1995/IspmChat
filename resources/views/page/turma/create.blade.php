<div class="modal fade" id="myModalthree" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Turma</h2>
        <div class="row">
        <form method="POST" action="{{route('turma.store') }}">
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

                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                    </div>
                </div>
                  
                            <input type="hidden" value="{{ $id }}" name="curso">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select  name="periodo" class="selectpicker form-control" data-live-search="true">
                                            <option value="NULL">Selecione o turno</option>
                                            <option value="Manhã">Manhã</option>
                                            <option value="Tarde">Tarde</option>
                                            <option value="Noite">Noite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="ano" class="selectpicker form-control" data-live-search="true">
                                        <option value="NULL">Selecione o Ano</option>
                                        <option value="1">1º Ano</option>
                                        <option value="2">2º Ano</option>
                                        <option value="3">3º Ano</option>
                                        <option value="4">4º Ano</option>
                                        <option value="5">5º Ano</option>                                       
									</select>
                                </div>
                            </div>
        </div>
     </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default">Salvar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
     </div>
     </form>
    </div>
 </div>