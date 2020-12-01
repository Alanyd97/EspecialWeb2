<div class="row d-flex justify-content-center p-0 m-0 comentarios" id="app">
    {if $usuario < 1} <input type="text" id="idUsuario" class="form-control d-none" value="{$id_usuario}">
            <input id="admin" value="{$usuario}" class="form-control  d-none">
        {/if}

        <section id="comentarios">
            <table class="table table-dark">
            {literal}
                <thead>
                    <tr>
                        <th scope="col">Comentarios</th>
                        <th scope="col">Puntajes</th>
                    </tr>
                </thead>
                <tbody>
                        <tr v-for="comentario of respuesta">
                            <td scope="col" class="d-none">{{comentario.comentario.comentario}}</td>
                            <td scope="col" >{{comentario.comentario}}</td>
                            <td scope="col">{{comentario.puntaje}}</td>
                            <th scope="col" v-if="admin == 0"> <button class="btn btn-primary" @click="deleteComentario" value="">Borrar</button></th>
                        </tr>
                        <input id="id_comentario" v-model="idComentario = comentario.id_comentario" class="form-control d-none">
                </tbody>
            {/literal}
            </table>
        </section>

        <div class="container-fluid">



        
            <div class="row d-flex justify-content-center comentarios">
                <input type="text" id="idJuegos" value="{$juego->id_juegos}" class="form-control  d-none" v-model="comentario.id_juegos = {$juego->id_juegos}">
                {if $usuario == 2}
                    <h2>Loguearse para poder comentar</h2>
                {elseif $usuario == 1}
                    <button v-if="admin ==0 " class="btn btn-primary  d-none" @click="postComentario" value="">Comentar</button>
                {/if}

            </div>
        </div>
</div>