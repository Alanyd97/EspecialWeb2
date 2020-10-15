<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 16:37:53
  from 'C:\xampp\htdocs\EspecialWeb2\templates\juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f885ec105ffe0_92993040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac3ec53c483cb64be99cb0d9502f05a210c2cb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\juegos.tpl',
      1 => 1602772672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./categorias/agregar.tpl' => 1,
    'file:./categorias/editar.tpl' => 1,
    'file:./categorias/eliminar.tpl' => 1,
    'file:./agregarJuego.tpl' => 1,
    'file:./footer.tpl' => 1,
    'file:./footerApp.tpl' => 1,
  ),
),false)) {
function content_5f885ec105ffe0_92993040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-2 contenedor-lista">
        <div class="row">
          <div class="col-8"><h5 class="justify-self-center categorias-titulo m-4">Generos</h5> </div>
          <div class="col-4">
              <?php $_smarty_tpl->_subTemplateRender("file:./categorias/agregar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        </div>

                <div class="row justify-content-center">
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value == 0) {?>
          <div class="col-8"> 
            <ul class="align-self-start justify-self-center lista-generos">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                  <li>
                    <a href='filtro/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_generos;?>
'><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombres;?>
</a>
                    <?php $_smarty_tpl->_subTemplateRender("file:./categorias/editar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./categorias/eliminar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </div> 
        <?php } else { ?>
          
          <div class="col-8"> 
            <ul class="align-self-start justify-self-center lista-generos">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                  <li><a href='filtro/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_generos;?>
'><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombres;?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </div> 
        <?php }?>

        </div>
          
          
  </div>
  <div class="col-8">
  
      <div class="col-12 d-flex justify-content-end"> 
        <?php $_smarty_tpl->_subTemplateRender("file:./agregarJuego.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
      </div>
        <?php if (sizeof($_smarty_tpl->tpl_vars['lista_juegos']->value) == 0) {?>
          <h4 class="mt-3"> No hay ningun juego con ese genero </h4>
        <?php } else { ?>
              <table class="table table-dark">
              <tbody>
              <tr>
              <th>Titulo</th>
              <th>Sinopsis</th>
              <th>Precio</th>
              <th>Detalle</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
                <tr>
                  <th><?php echo $_smarty_tpl->tpl_vars['juego']->value->titulo;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['juego']->value->sinopsis;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</th>
                  <th><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juegos;?>
">Detalle</a></th>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        <?php }?>
        
  </div>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footerApp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
