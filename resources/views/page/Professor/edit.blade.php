<div class="modal fade" id="edit_{{ $item->nif }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Editar Professor</h2>
        <div class="row">
         <form method="POST" action="{{route('professor.update',$item->nif) }}">
            @method('PUT')
            @csrf
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="number" value="{{ $item->nif }}" name="nif" class="form-control" placeholder="NIF">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" value="{{ $item->fullname }}" name="fullname" class="form-control" placeholder="Nome Completo">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-mail"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" value="{{ $item->email }}" name="email" class="form-control" placeholder="e-mail">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" value="{{ $item->grau_acad }}" name="grau_acad" class="form-control" placeholder="Grao Académico">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" value="{{ $item->formacao }}" name="formacao" class="form-control" placeholder="Área de Formação">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" value="{{ $item->telefone }}" name="telefone" class="form-control" placeholder="Telefone">
                        </div>
                    </div>
                </div>
        </div>
     </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        </div>
     </div>
     </form>
    </div>
 </div>