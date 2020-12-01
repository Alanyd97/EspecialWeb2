{include file="./header.tpl"}
{include file="./nav.tpl"}

<div class="container-fluid">
<div class="row">
    <div class="col-8">
        <img src="./FrontEnd/images/portada.jpg" class="portada" >
    </div>
    <div class="col-4 contenedor-login">
    <div class="login">
        <div class="col-12 d-flex justify-content-center"> <img src="./FrontEnd/images/logo.png" class="logo img-fluid" alt=""></div>
        <form method="post" action="iniciarSesion">
            <div class="form-group">
              <label class="label-login" >Usuario</label>
              <input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario" class="form-control" >
            </div>
            <div class="form-group">
              <label class="label-login">Contraseña</label>
              <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña">
            </div>
            <button type="submit" class="boton-login">Iniciar sesion</button>
            <small>{$mensaje}</small>
            <div class="row d-flex justify-content-center">
                <a class="link" href="juegos">Ingresar como invitado</a>
                 <button><a href = "registro">Registrarse</a></button>
            </div>
          </form>
    </div>
    </div>
</div>
</div>
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}