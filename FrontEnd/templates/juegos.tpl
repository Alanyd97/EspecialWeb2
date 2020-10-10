
{include file="./../../templates/header.tpl"}
  <div class="row d-flex justify-content-center">
      <div class="col-2 d-flex contenedor-lista">
          <h5 class="align-self-start justify-self-center categorias-titulo">Categorias</h5>
          <ul class="align-self-start justify-self-center lista-generos">
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
          </ul>
      </div>
      <div class="col-8">
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
      </div>
  </div>
{include file="./footerApp.tpl"}
{include file="./../../templates/footer.tpl"}