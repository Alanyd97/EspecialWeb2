{include file="./../../templates/header.tpl"}
<div class="row">
    <div class="col-8">
        <img src="./FrontEnd/images/portada.jpg" class="portada" >
    </div>
    <div class="col-4 contenedor-login">
    <div class="login">
        <div class="col-12 d-flex justify-content-center"> <img src="./FrontEnd/images/logo.png" class="logo" alt=""></div>
        <form>
            <div class="form-group">
              <label class="label-login">Usuario</label>
              <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label class="label-login">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="boton-login">Iniciar sesion</button>
            <div class="row d-flex justify-content-center">
                <a class="link" href="????">Ingresar como invitado</a>
            </div>
          </form>
    </div>
    </div>
</div>
{include file="./../../templates/footer.tpl"}