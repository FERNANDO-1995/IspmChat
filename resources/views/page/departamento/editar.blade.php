<div class="modal fade" id="editar_{{ $departamento->id }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Departamento</h2>
        <div class="row">
        <form method="POST" action="{{route('deptmento.update',$departamento->id)}}">
            @method('PUT')
            @csrf
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="name" value="{{$departamento->nome}}" class="form-control" placeholder="Nome">
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