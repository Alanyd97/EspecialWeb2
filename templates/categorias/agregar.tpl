   {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
  {if $usuario == 0}
    <img height="30" width="30" data-toggle="modal" data-target="#modalAdd"  class="mt-4" src="./FrontEnd/images/plus.png"> </img> 
  {/if}

  <!-- Modal -->
  <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="background-color: #555555;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Generos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {* FOMRULARIO AGREGAR CATEGORIA *}
          <form action="agregarGenero" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nuevo Genero</label>
              <input type="text" name="genero" class="form-control" placeholder="Genero...">
            </div>
            <button class="btn submit">Agregar</button>
          </form> 
      </div>
    </div>
  </div>
  </div>