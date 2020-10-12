
{include file="./header.tpl"}
  <div class="row d-flex justify-content-center">
      <div class="col-2 d-flex contenedor-lista">
          <h5 class="align-self-start justify-self-center categorias-titulo">Categorias</h5>
          <ul class="align-self-start justify-self-center lista-generos">
          {foreach from=$lista_generos item=genero}
              <li ><a href='filtro/{$genero->id_generos}'>{$genero->nombres}</a></li>
          {/foreach}
          </ul>
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
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}