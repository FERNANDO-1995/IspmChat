    
@foreach ($mensage as $sms)
    @if($sms->destino == Auth::user()->id)
        <li class="clearfix">
            <div class="chat-avatar">
            </div>
            <div class="conversation-text">
                <div class="ctext-wrap">
                    <p style="text-align: left">
                        {{ $sms->mensagem }}
                       
                    </p>
                    <small style="color: black !important" >
                        {{Carbon\Carbon::parse($sms->created_at)->locale('pt-pt')->diffForHumans()}}
                    </small>
                </div>
            </div>
        </li>
    @else
        <li class="clearfix odd">
            <div class="chat-avatar">
                
            </div>
            <div class="conversation-text">
                <div class="ctext-wrap chat-widgets-cn">
                   
                    <p style="text-align: left">
                        {{ $sms->mensagem }}
                    </p>
                    <small style="color: white !important" >
                        {{Carbon\Carbon::parse($sms->created_at)->locale('pt-pt')->diffForHumans()}}
                    </small>
                </div>
            </div>
        </li>
    @endif

@endforeach