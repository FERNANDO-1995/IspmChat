<div class="modal fade" id="myModalthree" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Forum</h2>
        <div class="row">
        <form method="POST" action="{{route('publicacao.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   
                                    <div class="nk-int-st">
                                        <select name="turma_prof_disc_id" id="" class="form-control">
                                            <option value="">Seleccione a Turma</option>

                                            @foreach (App\ProfDisc::where('professor_id',Auth::user()->professor->nif)->orderBy("id","ASC")->get() as $it)
                                                @foreach (App\TurmaProfDisc::where('pd_id',$it->id )->orderBy("id","ASC")->get() as $item)
                                                <option value="{{ $item->id}}">
                                                    <li class="list-group-item">{{ $item->turma->curso->nome }} - {{ $item->turma->ano }}º Ano
                                                    - {{ $item->turma->periodo }} - {{ $item->pd->disciplina->nome }} 
                                                    </li> 
                                                </option>                             
                                                @endforeach
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
                                        <input type="text" name="titulo" class="form-control" placeholder="titulo">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <textarea name="conteudo" class="form-control" placeholder="Conteúdo" id=""  rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   
                                <div class="custom-file">
                                    <input type="file" name="file[]" multiple class="custom-file-input form-control" id="customFile">
                                    <label class="custom-file-label" for="customFile"></label>
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