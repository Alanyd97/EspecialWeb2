{literal}
<section id="comentarios">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Puntajes</th> 
                </tr>
            </thead>
            <tbody>
                <tr v-for="comentario of respuesta">
                    <td scope="col">{{comentario.comentario}}</th>
                    <td scope="col">{{comentario.puntaje}}</th>
                    <th scope="col"  v-if="admin == 0"> <button  class="btn btn-primary" @click="deleteComentario(comentario.id_comentario)" value="">Borrar</button></th>   
                </tr>
            </tbody>
        </table>   
</section>
{/literal}