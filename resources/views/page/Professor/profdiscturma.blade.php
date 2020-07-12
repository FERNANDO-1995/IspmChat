<div class="modal fade" id="disc_{{ $item->prof->nif }}" role="dialog" >
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Disciplina / Turma</h2>
        <div class="row">
        <form method="POST" action="{{route('professor.addisc')}}">
        @csrf
        @php
           $i=1; 
        @endphp
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            @foreach(App\Disciplina::orderBy("nome","ASC")->get() as $disc)
             <div class="form-group">
                 <div class="form-check">
                     <input class="form-check-input" type="radio" value="{{ $disc->id }}" id="prof{{ $i }}" name="disciplina_id">
                     <label class="form-check-label" for="prof{{$i++  }}">
                         {{ $disc->nome }}
                     </label>
                    <input type="hidden" name="professor_id" value="{{$item->prof->nif}}">
                 </div>
             </div>
        @endforeach
        </div>
        @php
        $i=1; 
     @endphp
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            @foreach (Auth::user()->departamento->curso as $curso)
                @foreach(App\Turma::where('curso_id',$curso->id)->orderBy("nome","ASC")->get() as $turma)
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{ $turma->id }}" id="turma{{ $i }}" name="turma_id">
                            <label class="form-check-label" for="turma{{$i++  }}">
                                {{ $turma->curso->nome }} - {{ $turma->ano }}º Ano - {{ $turma->periodo }}
                            </label>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
         
        </div>
     </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default">Salvar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        </div>
     </div>
     </form>
    </div>
 </div>