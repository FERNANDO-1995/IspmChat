<div class="modal fade" id="Cadastro_Curso" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Lista de Curso</h2>
        <form method="POST" action="{{route('curso.store') }}">
            @csrf
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="text" name="nome" required class="form-control" placeholder="Nome do Curso">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-mail"></i>
                    </div>
                    <div class="nk-int-st">
                        <input type="number" min="3" required max="5" name="ano" class="form-control" placeholder="Anos de Frequência">
                    </div>
                </div>
            </div>

            
            

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-edit"></i>
                    </div>
                    <div class="nk-int-st">
                        <textarea name="descricao" id="" cols="15" rows="3" class="form-control" placeholder="Descrição do Cruso" >
                        </textarea>
                    </div>
                </div>
            </div>
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