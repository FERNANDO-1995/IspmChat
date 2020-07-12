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
                           <div class="row">
                              <div class="col-md-4 col-sm-12 col-lg-4"  style="margin-right: 10px">
                                 @if (Auth::user()->categoria =="Estudante")
                                    <h4>
                                       Professores 
      
                                    </h4>
                                    <ul class="list-group">
                                   
                                       @foreach (App\TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->get(); as $use)
                                          <li class="list-group-item">
                                             {{ $use->pd->professor->fullname }}</td>
                                             <a href="{{ route('mensa.chat',$use->pd->professor->user->id) }}"  title="Conversar" > <span style="font-size: 26px; margin-right: 10px;" class="notika-icon notika-chat" ></span> </a>
                                          </li><br>
                                       @endforeach
                                    @endif
                                    @if (Auth::user()->categoria =="Professor")
                                       <h4>
                                          Usuarios
                                       </h4>
                                       <ul class="list-group">
                                    
                                                <li class="list-group-item">
                                                   {{ $usuario->name }}</td>
                                                   <a href="{{ route('mensa.chat', $usuario->id) }}"  title="Conversar" > <span style="font-size: 26px; margin-right: 10px;" class="notika-icon notika-chat" ></span> </a>
                                                </li><br>
                                    @endif
                                    
                                 </ul>
                              </div>
   
                              <div class="col-md-6 col-sm-12 col-lg-6" style="padding: 10px">
                                 <h4>
                                 Mensagem : {{ App\User::find($id)['name'] }}
                                 </h4>
                                 <div class="card-box" style="padding: 10px; margin-left: 10px">
                                    <div class="chat-conversation">
                                        <div class="widgets-chat-scrollbar" id="rolar">
                                            <ul class="conversation-list" id="mensage" style="height: 500px">
                                               
                                            </ul>
                                        </div>
                                        <div class="chat-widget-input">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                                <form method="post" action="{{route('mensagem.store')}}"  id="formulario">
                                                    @csrf
                                                    <div class="form-group todo-flex">
                                                        <div class="nk-int-st">
                                                            <input type="text" id="sms" class="form-control chat-input" name="mensagem" placeholder="Escreva o Texto">
                                                        </div>
                                                        <input type="hidden" name="prof" value="{{ $id }}">
                                                        <div class="chat-send">
                                                            <button type="submit" id="enviar" class="btn btn-md btn-primary btn-block notika-chat-btn">Enviar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                              </div>
                              <div class="col-md-2 col-sm-12 col-lg-2">

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
     
@endsection

@push('js')
    <script src="{{ asset('js/jquery.js') }}"></script>
@endpush
@push('jq')
<script>
   $(document).ready(function(){

   var posicao = $("#mensage")..offset().top;
   
   $("#mensage").animate({
       scrollTop:posicao+10000
   },1500);


       $("#enviar").click(function(){
           var posicao = $("#mensage").offset().top;
           $("#mensage").animate({
               scrollTop: posicao*2},1500)
           });
       });
  
</script>

@if (isset($espect) && ($espect == 0))
   <script	 type="text/javascript">
       $(document).ready(function(){
           $('#formulario').on('submit',function(event) {
               event.preventDefault();
               var data = $('#formulario').serializeArray();
               // console.log(data);
               $.ajax({
                   type: 'post',
                   data: data,
                   url:  "{{route('mensagem.store')}}",
                   success:function(data){
                           $("#sms").val("");
                   }
                   //console.log(data)
               });

           });
           var aut_referesh = setInterval(function(){
               $('#mensage').load("{{route('mensa.lista',$id)}}").fadeIn('fast');
           },1500);
       });
               
   </script>


@endif
@endpush

