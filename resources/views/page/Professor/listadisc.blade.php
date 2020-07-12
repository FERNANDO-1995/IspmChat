<div class="modal fade" id="list_{{ $item->prof->nif }}" role="dialog" >
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Disciplina / Turma</h2>
        
        <div class="table-responsive">
            <ul>
                @foreach (App\ProfDisc::where('professor_id',$item->prof->nif )->orderBy("id","ASC")->get() as $it)
                    @foreach (App\TurmaProfDisc::where('pd_id',$it->id )->orderBy("id","ASC")->get() as $item)
                        <li class="list-group-item">{{ $item->turma->curso->nome }} - {{ $item->turma->nome }} - {{ $item->turma->ano }}º Ano
                        - {{ $item->turma->periodo }} - {{ $item->pd->disciplina->nome }}
                        </li> <br>                             
                    @endforeach
                @endforeach
            </ul>
        </div> 
        </div>
     </div>
       
     </div>
     
</div>
 