"use strict"
    document.addEventListener("DOMContentLoaded", function(){
        this.admin = document.getElementById("admin").value;
        this.id_usuario = document.getElementById("idUsuario").value;
        console.log(this.admin + "  = " + this.id_usuario);



    })

// const app = new Vue({
//     el: "#app",  
//     created() {
//         this.admin = document.getElementById("admin").value;
//         console.log("aloooo");
//         this.getComentario();
//       },
//     data: {
//         respuesta : [],
//         admin:'',
//         idComentario: '',
//         comentario: {
//             puntaje: "",
//             comentario: "",
//             idUsr: '',
//             idJuegos: '',
//             admin: ''
//         },
//         url: "api/comentarios",
//     },
//     methods: {
//         async getComentario() {
//             let id =  document.querySelector("#idJuegos").value;
//             try {
//                 let promesa = await fetch(this.url+"/"+id);
//                 if (promesa.ok) {
//                     let respuesta = await promesa.json();
//                     if (respuesta) {    
//                         app.respuesta= respuesta;
//                     }
//                 } else {
//                     alert("Ocurrio un error");
//                 }
//             } catch (error) {
//                 alert(error)
//             }
//         },
//         async postComentario() {  
//             try {
//                 let promesa = await fetch(this.url, {
//                     method: 'POST',
//                     headers: {'Content-Type': 'application/json'},       
//                     body: JSON.stringify(this.comentario)
//                 });
//                 if (promesa.ok){
//                         console.log(this.comentario);
//                         this.getComentario();
//                  }
//              } catch (error) {
//                  console.log(error);
//              }  
//         },
//         async deleteComentario() {
//             try {
//                  let promesa = await fetch(this.url+"/"+this.idComentario, {
//                     method: 'DELETE',
//                     headers: {'Content-Type': 'application/json'},       
//                      body: JSON.stringify(this.comentario)
//                  });
//                  if (promesa.ok){
//                      this.getComentario();
//                  }
//              } catch (error) {
//                  console.log(error);
//              }    
//         }
//     }



// })