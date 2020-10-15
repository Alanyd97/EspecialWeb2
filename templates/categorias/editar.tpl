   {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
   {if $usuario == 0}
    <img height="30" width="30" data-toggle="modal" data-target="#modalEditar"  class="" src="./FrontEnd/images/edit.png"> </img> 
  {/if}

  <!-- Modal -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="background-color: #555555;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Generos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {* FOMRULARIO EDITAR CATEGORIA *}
          <form action="editarGenero/{{$genero->id_generos}}" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre</label>
              <input type="text" name="editarGenero"  id="editarGenero" class="form-control" placeholder="Genero...">
            </div>
            <button class="btnEditar" type="submit">Editar</button>
          </form> 
      </div>
    </div>
  </div>
  </div>