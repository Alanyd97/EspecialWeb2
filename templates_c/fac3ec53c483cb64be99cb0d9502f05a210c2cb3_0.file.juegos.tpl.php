<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 07:33:58
  from 'C:\xampp\htdocs\EspecialWeb2\templates\juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87df46985565_44194059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac3ec53c483cb64be99cb0d9502f05a210c2cb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\juegos.tpl',
      1 => 1602740023,
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
function content_5f87df46985565_44194059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row justify-content-center">
      <div class="col-2 contenedor-lista">
        <div class="row">
          <div class="col-8"><h5 class="justify-self-center categorias-titulo m-4">Generos</h5> </div>
          <div class="col-4">
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value == 0) {?>
                <img height="30" width="30" data-toggle="modal" data-target="#modalAdd"  class="mt-4" src="./FrontEnd/images/config.png"> </img> 
              <?php }?>
          
              <!-- Modal -->
              <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"  >
                <div class="modal-content" style="background-color: #555555;">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Configurar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" >

                                            <form action="agregarGenero" method="post">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Nuevo Genero</label>
                          <input type="text" name="genero" class="form-control" placeholder="Genero...">
                        </div>
                      <input type="submit" class="btn btn-success" value="Insertar">
                      </form> 
                  </div>
                   <table>
        <thead>
            <th>genero</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                <tr>    
            <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombres;?>
</td>
            <td><button class="btnEditar"><a href ="editG/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_generos;?>
">Editar</a></button></td>
            <td><button class="btnEliminar"><a href="deleteG/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_generos;?>
">Borrar</a></button></td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
         </table>
                </div>
              </div>
              </div>
             
          </div>
        </div>

                <div class="row justify-content-center">
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
        </div>
          
          
      </div>
      <div class="col-8">
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
    <div class="col-md-6">
      <div class="completar">
        <form action="agregar" method="post">
          <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo...">
          <input type="text" name="sinopsis" id="sinopsis" class="form-control" placeholder="Sinopsis...">
          <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio...">
          <select class="form-control" name="id_generos">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombres;?>
</option>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
               <input type="submit" class="btn btn-success" value="Insertar">
         
        </form>
      </div>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footerApp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
