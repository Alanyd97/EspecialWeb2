
{include file="./header.tpl"}
{* {include file="./nav.tpl"} *}

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-2 contenedor-lista">
        <div class="row">
          <div class="col-8"><h5 class="justify-self-center categorias-titulo m-4">Generos</h5> </div>
          <div class="col-4">
              {include file="./categorias/agregar.tpl"}
          </div>
        </div>

        {* GENEROS LISTADO *}
        <div class="row justify-content-center">
        {if $usuario == 0}
          <div class="col-8"> 
            <ul class="align-self-start justify-self-center lista-generos">
                {foreach from=$lista_generos item=genero}
                  <li>
                    <a href='filtro/{$genero->id_generos}'>{$genero->nombres}</a>
                    {include file="./categorias/editar.tpl"}
                    {include file="./categorias/eliminar.tpl"} 
                  </li>
                {/foreach}
            </ul>
            </div> 
        {else}
          
          <div class="col-8"> 
            <ul class="align-self-start justify-self-center lista-generos">
                {foreach from=$lista_generos item=genero}
                  <li><a href='filtro/{$genero->id_generos}'>{$genero->nombres}</a></li>
                {/foreach}
            </ul>
            </div> 
        {/if}

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

</div>
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}