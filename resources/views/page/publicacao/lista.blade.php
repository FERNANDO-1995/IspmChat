    
 @foreach ($comentario as $ite)
   
        <li class="clearfix" id="asd" style="height: auto !important">
            <div class="chat-avatar">
                <img src="{{ asset('assets/arquivos/'.$ite->usuario->file) }}"  alt="..." style="width: 40px; height: 40px;">
                
            </div>
            <div class="conversation-text" >

                <div class="ctext-wrap " style="color: white; background-color:#0bacf7;">
                
                    <h5  style="color: black;" >
                        @if ($ite->usuario->categoria=="Professor")
                        Prof: {{$ite->usuario->name}}  
                        @else
                        {{$ite->usuario->name}} 
                        @endif
                      </h5>
                    <p style="text-align: left" >
                        {{$ite->conteudo}}
                    </p>
                    <small style="color: white !important;" >
                        {{Carbon\Carbon::parse($ite->created_at)->locale('pt-pt')->diffForHumans()}}
                    </small>
                </div>
            </div>
        </li>
    

@endforeach
