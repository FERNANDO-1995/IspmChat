<div class="modal fade" id="edit_{{ $item->id }}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Usuário</h2>
        <div class="row">
        <form method="POST" action="{{route('curso.update',$item->id) }}">
        @csrf
        @method('PUT')
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="text" name="nome" value="{{$item->nome}}" class="form-control" placeholder="Nome do Curso">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-mail"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="number" min="3" max="5" name="ano" value="{{$item->ano}}" class="form-control" placeholder="Anos de Frequência">
                    </div>
                </div>
            </div>

            

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <div class="bootstrap-select fm-cmp-mg">
                    <select name="departamento_id" class="selectpicker form-control" data-live-search="true">
                        @foreach(App\Departamento::orderBy('nome','ASC')->get() as $dep )
                            <option value="{{ $dep->id }}"
                                @if ($dep->id == $item->departamento->id)
                                    selected
                                @endif
                            >{{ $dep->nome }}</option>
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