@extends('Template.base')
@section('ispm')
<div class="notika-status-area">
        <div class="container">
            <div class="row">
                
               <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd row">
                            <div class="col-md-10 col-sm-12 col-lg-10 col-xl-10">
                                <h4 class="text-dark"></h4>
                            </div>
                        </div>
                           
                            <div class="card mb-3" style="background-color: white !important">
                                <p>
                                    @if (Auth::user()->categoria!="Estudante")
                                Disciplina: {{$publicacao->turmped->pd->disciplina->nome}}
                                Turma :  {{$publicacao->turmped->turma->nome}}
                                @else
                                Prof: {{$publicacao->turmped->pd->professor->fullname}}
                                Disciplina: {{$publicacao->turmped->pd->disciplina->nome}}
                                
                                @endif
                                </p>
                                <h4 class="card-title text-center">{{$publicacao->titulo}}</h4>
                                      <p class="card-text" style="font-size: 15px; text-align: justify; text-indent: 2em;line-height: 30px;">{{$publicacao->conteudo}}</p>
                                @foreach ($publicacao->arquivo as $ite)
                                <a href="{{ asset('assets/arquivos/'.$ite->file) }}" download="{{$ite->file}}"   title="{{$ite->descricao}}" > <span class="fa fa-file-pdf-o " aria-hidden="true" style="font-size: 30px; margin-right: 5px;color: rgb(253, 75, 75)"></span> </a>
                                @endforeach
   
                                <p class="text-right">
                                <span class="badge" style="text-align: right">Publicado {{Carbon\Carbon::parse($publicacao->created_at)->locale('pt-pt')->diffForHumans()}}</span>
                                </p>
                                <div class="progress" style="height: 1px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                                         
                                 <!-- Area de Comentatrio-->

                                 <div class="" style="padding: 10px; width: 100% ; background-color: white !important">
                                    <h4>
                                       Comentario 
                                    </h4>
                                    <div class="card-box" style="padding: 10px; margin-left: 10px">
                                       <div class="chat-conversation">
                                           <div class="widgets-chat-scrollbar" >
                                               <ul class="conversation-list"  id="comentario" style="height: 500px">
                                                   
                                               </ul>
                                           </div>
                                           <div class="chat-widget">
                                               <div class="row">
                                                   <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                                   <form method="post" action=""  id="formulario">
                                                       @csrf
                                                       <div class="form-group todo-flex">
                                                           <div class="nk-int-st">
                                                            <textarea id="sms" class="form-control chat-input border border-dark" style="height: 50px;border: 1px solid dimgray !important; padding: 5px; border-bottom-left-radius: 10px;border-top-left-radius: 10px" name="conteudo"  placeholder="Escreva o Texto" rows="1"></textarea>
                                                           </div>
                                                           <input type="hidden" name="publicacao_id" value="{{$id}}" >
                                                           <div class="chat-send">
                                                               <button type="submit" id="enviar" class="btn btn-md btn-primary btn-block notika-chat-btn" style="height: 50px !important; margin-top: -3px">Enviar</button>
                                                           </div>
                                                       </div>
                                                   </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                    
                                 </div>
                            </div>
            
                    </div>    
        </div>
    </div>
    <!-- Data Table area End-->
                
                
            </div>
        </div>
    </div>
</div>
</div>
    </div>
</div>

    
   
@endsection
@push('coment')
<script	 type="text/javascript">
  $(document).ready(function(){
      $('#formulario').on('submit',function(event) {
          event.preventDefault();
          var data = $('#formulario').serializeArray();
         
          $.ajax({
              type: 'post',
              data: data,
              url:  "{{route('comentario.store')}}",
              success:function(data){
                      $("#sms").val("");
              }
              //console.log(data)
          });

      });
      var aut_referesh = setInterval(function(){
          $('#comentario').load("{{route('coment.lista',$id)}}").fadeIn('fast');
      },1500);
  });
          
</script>

<script>
$(document).ready(function(){

var posicao = $("#comentario").offset().top;
// console.log(posicao+1000)

  var posicao = $("#comentario").offset().top;
// console.log(posicao+1000)

$("#enviar").on('click',function(){
  var posicao = $("#rolar").offset().top;
  $("#mensage").animate({
      scrollTop: posicao+100000},1500)
  });
});
</script>
    
@endpush