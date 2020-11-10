{include file="./../header.tpl"}
{include file="./../nav.tpl"}
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-5 d-flex align-items-center justify-content-center flex-wrap detalle-container">
        <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid img-portada" alt="">
    </div>
    <div class="col-1 d-flex align-items-around flex-wrap   detalle-container">
        <div class=" d-flex align-items-center flex-wrap img-miniatura">
            <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
        </div>
        <div class=" d-flex align-items-center flex-wrap img-miniatura">
            <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
        </div>
        <div class=" d-flex align-items-center flex-wrap img-miniatura">
            <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
        </div>
        <div class=" d-flex align-items-center flex-wrap img-miniatura">
            <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
        </div>
    </div>
    <div class="col-4 d-flex justify-content-center align-items-around flex-wrap detalle-container descripcion-container">
        <h3 class="titulo-detalle">{$juego->titulo}</h3>
        <p class="text-justify">{$juego->sinopsis}</p>
        <h2 class="precio text-center">{$juego->precio} </h4>
        {if $usuario == 0}
                    <!-- Button EDITAR modal -->
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
            Editar Juego
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
              <div class="modal-content">
                <div class="modal-header"  style="background-color: #555555;">
                  <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body"  style="background-color: #555555;">
                {* FORMULARIO MODAL *}
                      <form action='editar/{{$juego->id_juegos}}' method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" id="titulo" name="titulo" class="form-control" aria-describedby="emailHelp" placeholder="{$juego->titulo}">
                        </div>
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <textarea id="sinopsis" name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{$juego->sinopsis}"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Precio</label>
                          <input type="number" id="precio" name="precio" class="form-control" placeholder="{$juego->precio}">
                        </div>  
                        <div class="text-center">  
                          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                </div>
              </div>
            </div>
            </div>
            <small>{$mensaje}</small>
        {/if}
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-10 detalle-container requisitos-container">
        <table class="table table-dark">
            <thead>
              <tr style="width: 100%;">
                <th colspan="4" class="titulo-requisitos text-center">Requisitos</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">Sistema Operativo</th>
                  <td>{$requisitos->sistema}</td>
                <th scope="row">Memoria Ram</th>
                <td>{$requisitos->ram}</td>
              </tr>
              <tr>
                <th scope="row">Procesador</th>
                <td>{$requisitos->procesador}</td>
                <th scope="row">Grafica</th>
                <td>{$requisitos->grafica}</td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
  
 
</div>
   <div class="row d-flex justify-content-center p-0 m-0 comentarios">
   {if $usuario < 1} 
    <input type="text" id="idUsuario" class="form-control d-none" value="{$id_usuario}"> 
    <input id="admin" value="{$usuario}" class="form-control">
    <label for="exampleInputEmail1">{$usuario}</label>
  {/if} 
  {include file="./comentarios.tpl"}
  </div>
  

{include file="./../footerApp.tpl"}
{include file="./../footer.tpl"}