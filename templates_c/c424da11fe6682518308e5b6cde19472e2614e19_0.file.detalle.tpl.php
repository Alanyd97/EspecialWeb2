<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 21:05:07
  from 'C:\xampp\htdocs\EspecialWeb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f874be38de294_58986574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424da11fe6682518308e5b6cde19472e2614e19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EspecialWeb2\\templates\\detalle.tpl',
      1 => 1602702051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
    'file:./footerApp.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f874be38de294_58986574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<div class="row d-flex justify-content-center">
  <div class="col-5 d-flex align-items-center justify-content-center flex-wrap detalle-container">
      <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid img-portada" alt="">
  </div>
  <div class="col-1 d-flex align-items-around flex-wrap   detalle-container">
      <div class=" d-flex align-items-center flex-wrap img-miniatura">
          <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
      </div>
      <div class=" d-flex align-items-center flex-wrap img-miniatura">
          <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
      </div>
      <div class=" d-flex align-items-center flex-wrap img-miniatura">
          <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
      </div>
      <div class=" d-flex align-items-center flex-wrap img-miniatura">
          <img src="https://cdn-ext.fanatical.com/production/product/original/69622aee-d724-4214-8bb4-e62508290a61.jpeg?w=1200" class="img-fluid" alt="">
      </div>
  </div>
  <div class="col-4 d-flex justify-content-center align-items-around flex-wrap detalle-container descripcion-container">
      <h3 class="titulo-detalle"><?php echo $_smarty_tpl->tpl_vars['juego']->value->titulo;?>
</h3>
      <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['juego']->value->sinopsis;?>
</p>
      <h2 class="precio text-center"><?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
 </h4>
      <?php if ($_smarty_tpl->tpl_vars['usuario']->value == 0) {?>
                  <!-- Button EDITAR modal -->
          <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
          Editar Juego
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered"  role="document">
            <div class="modal-content">
              <div class="modal-header"  style="background-color: #555555;">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"  style="background-color: #555555;">
                                  <form action='editar/<?php ob_start();
echo $_smarty_tpl->tpl_vars['juego']->value->id_juegos;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
' method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" aria-describedby="emailHelp" placeholder="<?php echo $_smarty_tpl->tpl_vars['juego']->value->titulo;?>
">
                      </div>
                      <div class="form-group">
                          <label>Sinopsis</label>
                          <textarea id="sinopsis" name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['juego']->value->sinopsis;?>
"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Precio</label>
                        <input type="number" id="precio" name="precio" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
">
                      </div>  
                      <div class="text-center">  
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>
              </div>
            </div>
          </div>
          </div>
          <small><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </small>
      <?php }?>
  </div>
</div>
<div class="row d-flex justify-content-center">
<div class="col-10 detalle-container requisitos-container">
    <table class="table table-dark">
        <thead>
          <tr style="width: 100%;">
            <th colspan="4" class="titulo-requisitos text-center">Requisitos</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">Sistema Operativo</th>
              <td><?php echo $_smarty_tpl->tpl_vars['requisitos']->value->sistema;?>
</td>
            <th scope="row">Memoria Ram</th>
            <td><?php echo $_smarty_tpl->tpl_vars['requisitos']->value->ram;?>
</td>
          </tr>
          <tr>
            <th scope="row">Procesador</th>
            <td><?php echo $_smarty_tpl->tpl_vars['requisitos']->value->procesador;?>
</td>
            <th scope="row">Grafica</th>
            <td><?php echo $_smarty_tpl->tpl_vars['requisitos']->value->grafica;?>
</td>
          </tr>
        </tbody>
      </table>
</div>
</div>
</div>
   
<?php $_smarty_tpl->_subTemplateRender("file:./footerApp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
