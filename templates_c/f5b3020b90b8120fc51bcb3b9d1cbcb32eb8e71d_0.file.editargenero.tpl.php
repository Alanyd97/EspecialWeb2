<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 06:12:26
  from 'C:\xampp\htdocs\EspecialWeb2\templates\editargenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87cc2a0f13a8_65382634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b3020b90b8120fc51bcb3b9d1cbcb32eb8e71d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\editargenero.tpl',
      1 => 1602734910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
  ),
),false)) {
function content_5f87cc2a0f13a8_65382634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <form action="edit" method="post">
    <input type="text" name="generos" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
"></td>
    <input type="hidden" name="id_generos" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">
    <input type="submit" class="btn btn-success" value="Editar">
  </form><?php }
}
