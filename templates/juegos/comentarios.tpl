
<section id="comentarios">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Puntajes</th> 
                </tr>
            </thead>
            <tbody>
            {literal}
                <tr v-for="comentario of respuesta" >
                  <td scope="col">{{comentario.comentario}}</th>
                  <td scope="col">{{comentario.puntaje}}</th>
                  <input id="id_comentario" v-model="idComentario = comentario.id_comentario" class="form-control d-none">
                  <th scope="col"  v-if="admin ==0"> <button  class="btn btn-primary" @click="deleteComentario" value="">Borrar</button></th>   
                </tr>
            {/literal}
              <input id="id_comentario" v-model="idComentario = comentario.id_comentario" class="form-control d-none">
            </tbody>
        </table>   
</section>

<div class="container-fluid">
  <div class="row d-flex justify-content-center comentarios">
  <input type="text" id="idJuegos" value="{$juego->id_juegos}"  class="form-control  d-none" v-model="comentario.id_juegos = {$juego->id_juegos}">
    {if $usuario == 2}
      <h2>Loguearse para poder comentar</h2>
    {elseif $usuario == 1}
      <button  v-if="admin ==0 " class="btn btn-primary  d-none" @click="postComentario" value="">Comentar</button>
    {/if} 
    
  </div>
</div>