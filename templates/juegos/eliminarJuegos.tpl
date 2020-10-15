 {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
 {if $usuario == 0}
    <button class="btn m-3" data-toggle="modal" data-target="#eliminarJuego"  type="submit" style="color: white"> 
        <img height="30" width="30"  class="" src="./FrontEnd/images/plus.png"> </img> Eliminar juego
    </button>
  {/if}

  <!-- Modal -->
  <div class="modal fade" id="eliminarJuego" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="background-color: #555555;">
      <div class="modal-header">
        <h5 class="modal-title" id="example">Eliminar Juego</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action='eliminarJuego' method='post'>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Juegos</label>
                    <select class="form-control" name="juego" id="juego">
                        {foreach from=$lista_juegos item=juego}
                            <option  value="{$juego->id_juegos}">{$juego->titulo}</option></li>
                        {/foreach}
                    </select>
                </div>  
                <div class="text-center">  
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
      </div>
    </div>
  </div>
  </div>