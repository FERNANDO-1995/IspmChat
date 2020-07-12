<div class="modal fade" id="Monstar_{{ $use->turma->id  }}" role="dialog">
    <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
            <div class="container">
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    
                <div class="realtime-ctn">
                    <div class="realtime-title">
                        <h2>Conversa com o professor</h2>
                    </div>
                </div>
                <div class="card-box">
                    <div class="chat-conversation">
                        <div class="widgets-chat-scrollbar" >
                            <ul class="list-group">
                                
                                @foreach (App\Estudante::where('turma_id',$use->turma->id )->get(); as $estud)
                                    <li>
                                        <span style="margin-left: 100px">{{ $estud->fullname }}</span>
                                        <span><a href="{{ route('mensa.chat',$estud->user_id) }}"><span style="font-size: 26px; margin-right: 10px;" class="notika-icon notika-mail" ></span></a></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 