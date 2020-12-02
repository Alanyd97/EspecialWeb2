"use strict"
document.addEventListener("DOMContentLoaded", function(){
    const app = new Vue({
        el: '#app',  
        created() {
            this.admin = document.getElementById("admin").value;
            this.getComentario();
        },
        data: {
            respuesta : [{}],
            admin:'',
            idComentario: '',
            comentario: {
                puntaje: "asdasd",
                comentario: "asdasd",
                idJuegos: '',
                admin: ''
            },
            url: "http://localhost/EspecialWeb2/api/comentarios",
        },
        methods: {
            async getComentario() {
                let id =  document.querySelector("#idJuegos").value;
                console.log("---->"+id);
                try {
                    let promesa = await fetch(this.url+"/"+id);
                    if (promesa.ok) {
                        let respuesta = await promesa.json();
                        if (respuesta) {    
                            app.respuesta = respuesta;
                        }
                    } else {
                        alert("Ocurrio un error");
                    }
                } catch (error) {
                    alert(error)
                }
            },
            async postComentario() {  
                try {
                    let promesa = await fetch(this.url, {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json'},       
                        body: JSON.stringify(this.comentario)
                    });
                    if (promesa.ok){
                            console.log(this.comentario);
                            this.getComentario();
                    }
                } catch (error) {
                    console.log(error);
                }  
            },
            async deleteComentario(id) {
                try {
                    let promesa = await fetch(this.url+"/"+id, {
                        method: 'DELETE',
                        headers: {'Content-Type': 'application/json'},       
                        body: JSON.stringify(this.comentario)
                    });
                    if (promesa.ok){
                        this.getComentario();
                    }
                } catch (error) {
                    console.log(error);
                }    
            }
        }



    });
})