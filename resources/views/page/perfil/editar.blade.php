<div class="modal fade" id="editar{{Auth::user()->id}}" role="dialog">
    
    <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Editar o Perfil</h2>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form method="POST" action="{{route('usuario.edit',Auth::user()->id) }}" enctype="multipart/form-data">
        @csrf          
        @method('GET')     
                <div class="custom-file">
                    <input type="file" name="file" multiple class="custom-file-input form-control" id="customFile">
                    <label class="custom-file-label" for="customFile"></label>
                  </div>
                
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   
                <div class="custom-file">
                    <input type="text" name="name" value="{{Auth::user()->name}}" class="custom-file-input form-control" id="customFile">
                    <label class="custom-file-label" for="customFile"></label>
                  </div>
                
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   
                <div class="custom-file">
                    <input type="text" name="email" value="{{Auth::user()->email}}" class="custom-file-input form-control" id="customFile">
                    <label class="custom-file-label" for="customFile"></label>
                  </div>
                
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   
                <div class="custom-file">
                <input type="text" name="password" value="" class="custom-file-input form-control" id="customFile">
                    <label class="custom-file-label" for="customFile"></label>
                  </div>   
            </div>         
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Save</button>
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   </div>        
        </div>

    </form>  
    </div>
 </div>

   
            