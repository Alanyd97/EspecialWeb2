
<section id="comentarios">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Puntajes</th> 
                </tr>
            </thead>
            <tbody>
              {foreach from=$lista_juegos item=juego}
                <tr>
                <td scope="col">comentario.comentario</th>
                <td scope="col">comentario.puntaje</th>
                </tr>
              {/foreach}
              <input id="id_comentario" v-model="idComentario = comentario.id_comentario" class="form-control d-none">
              {if $usuario == 0}
                <th scope="col"> <button  class="btn btn-primary" @click="deleteComentario" value="">Borrar</button></th>   
              {/if} 
            </tbody>
        </table>   
</section>

<div class="container-fluid" id="app">
  <div class="row d-flex justify-content-center comentarios">
    {if $usuario == 2}
      <h2>Loguearse para poder comentar</h2>
    {elseif $usuario == 1}
      <input type="text" id="idJuegos" value="{$juegos->id_juegos}"  class="form-control d-none" v-model="comentario.id_juegos = {$juegos->id_juegos}">
      <button  v-if="admin ==0 " class="btn btn-primary" @click="postComentario" value="">Comentar</button>
    {/if} 
    
  </div>
</div>