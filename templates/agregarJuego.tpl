
   {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
   {if $usuario == 0}
    <button class="btn m-3" data-toggle="modal" data-target="#agregarJuego"  type="submit" style="color: white"> 
        <img height="30" width="30"  class="" src="./FrontEnd/images/plus.png"> </img> Agregar juego
    </button>
  {/if}

  <!-- Modal -->
  <div class="modal fade" id="agregarJuego" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="background-color: #555555;">
      <div class="modal-header">
        <h5 class="modal-title" id="example">Agregar Juego</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action='agregarJuego' method="post">
                <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" id="tituloAgregar" name="tituloAgregar"  class="form-control" aria-describedby="emailHelp" placeholder="The Witcher">
                </div>
                <div class="form-group">
                    <label>Sinopsis</label>
                    <textarea id="sinopsisAgregar" name="sinopsisAgregar" class="form-control"  rows="3" placeholder="Gerald de rivia es un brujo que vivia en..."></textarea>
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" id="precioAgregar" name="precioAgregar"  class="form-control" placeholder="123">
                </div>   
                <div class="form-group">
                <label for="exampleFormControlSelect1">Genero</label>
                    <select class="form-control" name="genero" >
                        {foreach from=$lista_generos item=genero}
                            <option value="{$genero->id_generos}">{$genero->nombres}</option></li>
                        {/foreach}
                    </select>
                </div>  
                <div class="text-center">  
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
      </div>
    </div>
  </div>
  </div>