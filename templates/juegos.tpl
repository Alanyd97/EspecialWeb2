
{include file="./header.tpl"}
{include file="./nav.tpl"}

<div class="container-fluid">
  <div class="row justify-content-center">
      <div class="col-2 contenedor-lista">
        <div class="row">
          <div class="col-8"><h5 class="justify-self-center categorias-titulo m-4">Generos</h5> </div>
          <div class="col-4">
              {* IMAGEN TOGGLE MODAL ADD CATEGORIA *}
              {if $usuario == 0}
                <img height="30" width="30" data-toggle="modal" data-target="#modalAdd"  class="mt-4" src="./FrontEnd/images/config.png"> </img> 
              {/if}
          
              <!-- Modal -->
              <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"  >
                <div class="modal-content" style="background-color: #555555;">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Configurar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" >

                      {* FOMRULARIO AGREGAR CATEGORIA *}
                      <form action="agregarGenero" method="post">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Nuevo Genero</label>
                          <input type="text" name="genero" class="form-control" placeholder="Genero...">
                        </div>
                      <input type="submit" class="btn btn-success" value="Insertar">
                      </form> 
                  </div>
                   <table>
        <thead>
            <th>genero</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody >
            {foreach from=$lista_generos item=genero}
                <tr>    
            <td>{$genero->nombres}</td>
            <td><button class="btnEditar"><a href ="editG/{$genero->id_generos}">Editar</a></button></td>
            <td><button class="btnEliminar"><a href="deleteG/{$genero->id_generos}">Borrar</a></button></td>
            </tr>
            {/foreach}
        </tbody>
         </table>
                </div>
              </div>
              </div>
             
          </div>
        </div>

        {* GENEROS LISTADO *}
        <div class="row justify-content-center">
          <div class="col-8"> 
            <ul class="align-self-start justify-self-center lista-generos">
                {foreach from=$lista_generos item=genero}
                  <li><a href='filtro/{$genero->id_generos}'>{$genero->nombres}</a></li>
                {/foreach}
            </ul>
            </div> 
        </div>
          
          
      </div>
      <div class="col-8">
            {if sizeof($lista_juegos) == 0}
              <h4 class="mt-3"> No hay ningun juego con ese genero </h4>
            {else}
                  <table class="table table-dark">
                  <tbody>
                  <tr>
                  <th>Titulo</th>
                  <th>Sinopsis</th>
                  <th>Precio</th>
                  <th>Detalle</th>
                </tr>
                {foreach from=$lista_juegos item=juego}
                    <tr>
                      <th>{$juego->titulo}</th>
                      <th>{$juego->sinopsis}</th>
                      <th>{$juego->precio}</th>
                      <th><a href="detalle/{$juego->id_juegos}">Detalle</a></th>
                    </tr>
                {/foreach}
                </tbody>
              </table>
            {/if}
            
      </div>
  </div>
    <div class="col-md-6">
      <div class="completar">
        <form action="agregar" method="post">
          <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo...">
          <input type="text" name="sinopsis" id="sinopsis" class="form-control" placeholder="Sinopsis...">
          <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio...">
          <select class="form-control" name="id_generos">
             {foreach from=$lista_generos item=genero}
            <option value="{$genero->id_genero}">{$genero->nombres}</option>
             {/foreach}
                </select>
               <input type="submit" class="btn btn-success" value="Insertar">
         
        </form>
      </div>
    </div>

</div>
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}