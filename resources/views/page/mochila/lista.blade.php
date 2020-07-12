<div class="modal fade" id="Mochila" role="dialog" >
    <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
            <h2>Mochila</h2> <hr>
        
        <div class="" style="overflow-x: hidden;overflow-y: auto">
            <ul>
                @if(Auth::user()->categoria == "Estudante")
                    @foreach (App\TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->get() as $it)
                        @foreach (App\Publicacao::where('turma_prof_disc_id',$it->id)->orderBy('id','DESC')->get() as $item)
                            @foreach ($item->arquivo as $aqui)
                                <li class="">
                                    <a href="{{ asset('assets/arquivos/'.$aqui->file) }}" download="{{$aqui->file}}"   title="Baixar" >{{$aqui->file}}</a>
                                    <p class="card-text"><small class="text-muted">Publicado {{Carbon\Carbon::parse($aqui->created_at)->locale('pt-pt')->diffForHumans()}}</small></p>
                                </li> <br> 
                            @endforeach

                        @endforeach
                    @endforeach
                @endif
            </ul>
        </div> 
        </div>
     </div>
       
     </div>
     
</div>
 