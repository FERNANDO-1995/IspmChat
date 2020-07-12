<div class="modal fade" id="edit{{$item->id}}" role="dialog">
    <div class="modal-dialog modal-large">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
         <div class="modal-body">
        <h2>Departamento</h2>
        <div class="row">
        <form method="POST" action="{{route('estudante.update', $item->id) }}">
            @method('PUT')
        @csrf
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-support"></i>
                </div>
                <div class="nk-int-st">
                <input type="text" name="numero" value="{{$item->numero}}" class="form-control" placeholder="Número de Matricula">
                </div>
            </div>
        </div>
             
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-support"></i>
                </div>
                <div class="nk-int-st">
                    <input type="text" name="fullname" value="{{$item->fullname}}" class="form-control" placeholder="Nome">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-support"></i>
                </div>
                <div class="nk-int-st">
                    <input type="date" name="data_nasc" value="{{$item->data_nasc}}" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              
            <div class="bootstrap-select fm-cmp-mg">
                <select name="genero" class="selectpicker form-control" data-live-search="true">
                    <option value="1"
                    @if("masculino" == $item->genero)
                    selected
                   @endif>Masculino</option>
                   @if("feminino" == $item->genero)
                    selected
                   @endif>Feminino</option>
                   
                    </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          
            <div class="bootstrap-select fm-cmp-mg">
                <select name="turma_id" class="selectpicker form-control" data-live-search="true">
                @foreach($turma as $tm)
                            <option value="{{$tm->id}}"
                            @if($tm->id == $item->turma_id)
                                                 selected
                                                @endif
                            >{{$tm->nome}}</option>
                @endforeach
                    </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          
            <div class="bootstrap-select fm-cmp-mg">
                <select name="turno" class="selectpicker form-control" data-live-search="true">
                @foreach($turno as $it)
                            <option value="{{$it}}"
                            @if($it == $item->turno)
                                                 selected
                                                @endif
                            >{{$it}}</option>
                @endforeach
                    </select>
            </div>
        </div>
        
        
        
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          
          <div class="bootstrap-select fm-cmp-mg">
              <select name="anoacad" class="selectpicker form-control" data-live-search="true">
              <option value="null" >Ano Academico</option>
             
                          <option value="1"
                          @if(1 == $item->anoacad)
                          selected
                         @endif>1º Ano</option>
                          <option value="2" 
                          @if(2 == $item->anoacad)
                          selected
                         @endif>2º Ano</option>
                          <option value="3" 
                          @if(3 == $item->anoacad)
                          selected
                         @endif >3º Ano</option>
                          <option value="4" 
                          @if(4 == $item->anoacad)
                          selected
                         @endif >4º Ano</option>
                          <option value="5" 
                          @if(5 == $item->anoacad)
                          selected
                         @endif>5º Ano</option>
                          <option value="6" 
                          @if(6 == $item->anoacad)
                          selected
                         @endif>6º Ano</option>
                  
                  </select>
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