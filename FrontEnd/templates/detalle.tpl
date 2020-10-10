{include file="./../../templates/header.tpl"}

<div class="row d-flex justify-content-center">
<div class="col-5 d-flex align-items-center flex-wrap  detalle-container">
    <img src="./../images/8cbe3bc8-8559-41eb-923d-cc57b9514e7c.jpeg" class="img-fluid" alt="">
</div>
<div class="col-1 d-flex align-items-around flex-wrap">
    <div class=" d-flex align-items-center flex-wrap img-miniatura">
        <img src="./../images/8cbe3bc8-8559-41eb-923d-cc57b9514e7c.jpeg" class="img-fluid" alt="">
    </div>
    <div class=" d-flex align-items-center flex-wrap img-miniatura">
        <img src="./../images/8cbe3bc8-8559-41eb-923d-cc57b9514e7c.jpeg" class="img-fluid" alt="">
    </div>
    <div class=" d-flex align-items-center flex-wrap img-miniatura">
        <img src="./../images/8cbe3bc8-8559-41eb-923d-cc57b9514e7c.jpeg" class="img-fluid" alt="">
    </div>
    <div class=" d-flex align-items-center flex-wrap img-miniatura">
        <img src="./../images/8cbe3bc8-8559-41eb-923d-cc57b9514e7c.jpeg" class="img-fluid" alt="">
    </div>
</div>
<div class="col-4 d-flex justify-content-center flex-wrap detalle-container descripcion-container">
    <h3 class="titulo-detalle">{$juego->titulo}</h3>
    <p class="text-justify">{$juego->sinopsis}</p>
    <h2>{$juego->precio} </h4>
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
   
{include file="./footerApp.tpl"}
{include file="./../../templates/footer.tpl"}