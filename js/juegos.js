"use strict"

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Comenta sobre tu juego favorito",
            comentarios: [],
            usuarios: [],
            auth: true
        },
        methods: {
            DeleteComentarios: function (id) {
                DeleteComentarios(id);
            }
        }
    });
    
    function GetComentarios() {
        let id_juego = document.getElementById("juego").value;

        fetch("api/comentarios/" + id_juego)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios,
            console.log(comentarios)
        })
        .catch(error => console.log(error));
    }

    async function AddComentarios(e) {
        e.preventDefault();
        let data = {
            comentario: document.querySelector("textarea[name=comentario]").value,
            comentarios: document.querySelector("textarea[name=comentario]").value,
            puntaje: document.querySelector("input[name=puntaje]").value,
            id_producto: document.getElementById("juego").value
            
        }

        let id_producto = document.getElementById("juego").value;
    
        let response = await fetch("api/comentarios/" + id_productow, {
            "method": "POST",
            "headers": {
                "Content-Type": "application/json",
            },
            "body": JSON.stringify(data)
        });
        if (!response.ok)
            console.log("Error de conexion");

        
        GetComentarios();
    }
    function DeleteComentarios(id){
        fetch("api/comentarios/"+ id, {
            method: 'DELETE',
        })
        .then(r => GetComentarios())
        .catch(error => console.log(error));
    }
GetComentarios();
document.querySelector("#FormComentarios").addEventListener('submit', AddComentarios);