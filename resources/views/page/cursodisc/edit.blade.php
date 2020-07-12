<div class="modal fade" id="edit_{{ $item->id }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Disciplina</h2>
        <div class="row">
        <form method="POST" action="{{route('cursodis.update',$item->id) }}">
            @method('PUT')
        @csrf
                            

                           

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              
            <div class="bootstrap-select fm-cmp-mg">
                <select name="disciplina_id" class="selectpicker form-control" data-live-search="true">
                <option value="null" >Seleccione a disciplina</option>
                @foreach($disciplina as $itm)
                            <option value="{{$itm->id}}"
                                
                                @if($itm->id == $item->disciplina_id)
                                selected
                               @endif
                                
                                >{{$itm->nome}}</option>
                    @endforeach
                    </select>
            </div>
        </div>              

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-support"></i>
                </div>
                <div class="nk-int-st">
                    <textarea name="descricao" class="form-control" cols="30" rows="3" placeholder="Descrição">{{$item->descricao}}</textarea>
                </div>

            </div>
        </div>    

                            
                           
        </div>
     </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
     </form>
    </div>
 </div>