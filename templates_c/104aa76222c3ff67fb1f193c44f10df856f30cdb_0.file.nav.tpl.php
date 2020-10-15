<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 15:23:38
  from 'C:\xampp\htdocs\EspecialWeb2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f884d5ab2eec8_48931559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104aa76222c3ff67fb1f193c44f10df856f30cdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\nav.tpl',
      1 => 1602681286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f884d5ab2eec8_48931559 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar nav-app d-flex justify-content-start" >
  <a class="navbar-brand" href="<?php echo BASE_URL;?>
">
    <img src="./FrontEnd/images/logo.png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
 <div class="links-container">
    <ul class="nav navbar-nav navbar-right d-inline">
    <li class="links-nav"><a class="link" href="juegos">Inicio</a></li>
    <?php if ($_smarty_tpl->tpl_vars['usuario']->value == 0) {?>
        <li class="links-nav"><a href="logOut" class="link " >Log Out</a></li>
    <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value == 2) {?>
        <li class="links-nav"><a class="link" href="login">Log In</a></li>
    <?php }?>
    </ul>
 </div>

</nav>
<?php }
}
