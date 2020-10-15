   {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
   {if $usuario == 0}
    <img height="30" width="30" data-toggle="modal" data-target="#modalEliminar"  class="" src="./FrontEnd/images/delete.png"> </img> 
  {/if}

  <!-- Modal -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="background-color: #555555;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Genero</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pl-3 pr-3">
      
          <div class="row">
              <small style="color: red">Eliminando un genero, se eliminaran todos los juegos que dependen de este. </small>
           </div>
          <div class="row">
             <button class="btn"><a href ="deleteG/{$genero->id_generos}">Eliminar igualmente</a></button>
          </div>
      </div>
    </div>
  </div>
  </div>