<div class="modal fade" id="AddProfessor" role="dialog">
    <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Professores</h2>
        <div class="row">
        <form method="POST" action="{{route('professor.add')}}">
        @csrf
        @php
           $i=1; 
        @endphp
        @foreach(App\Professor::orderBy("fullname","ASC")->get() as $prof)
            @if(App\ProfDepart::where('id_prof',$prof->nif)->where('id_dep',Auth::user()->id_dep)->first() == NULL )
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $prof->nif }}" id="prof{{ $i }}" name="prof[]">
                        <label class="form-check-label" for="prof{{$i++  }}">
                            {{ $prof->fullname }}
                        </label>
                    </div>
                </div>
            @endif
        @endforeach
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