<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 21:03:42
  from 'C:\xampp\htdocs\EspecialWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f874b8e01bf39_79322833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a7e769ec2da1ce48ed1efacffc103ac03d9ae8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\login.tpl',
      1 => 1602702051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
    'file:./footerApp.tpl' => 1,
  ),
),false)) {
function content_5f874b8e01bf39_79322833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <small><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</small>
            <div class="row d-flex justify-content-center">
                <a class="link" href="juegos">Ingresar como invitado</a>
            </div>
          </form>
    </div>
    </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footerApp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
