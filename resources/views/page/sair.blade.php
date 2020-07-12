<div class="modal fade" id="Sair" role="dialog" >
    <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
            <h2>Confirmação</h2> <hr>
        
        <div class="" style="overflow-x: hidden;overflow-y: auto">
            <p> 
                O {{ Auth::user()->categoria }} <b>{{ Auth::user()->name }}</b>
                Desejas realmente sair do Sistema??
            </p>
            <p class="row">
                <a class=" btn btn-success col-md-5" style="margin-right: 2px" href="{{ route('logout') }}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sim
                </a>
               
                <a href="#" class="btn btn-danger col-md-5" style="margin-left: 5px" data-dismiss="modal">Cancelar</a>  
            </p>
        </div> 
        </div>
     </div>
       
     </div>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> 
     
</div>
 