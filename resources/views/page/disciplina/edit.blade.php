<div class="modal fade" id="edit_{{ $disc->id }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Disciplina</h2>
        <div class="row">
        <form method="POST" action="{{route('disciplina.update',$disc->id) }}">
            @method('PUT')
        @csrf
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="nome" value="{{$disc->nome}}" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="caract" value="{{$disc->caract}}" class="form-control" placeholder="e-mail">
                                    </div>
                                </div>
                            </div>

                          
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <textarea name="descricao" class="form-control" cols="30" rows="3">{{$disc->descricao}}</textarea>
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