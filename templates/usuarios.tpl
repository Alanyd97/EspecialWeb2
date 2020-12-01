
{include file="./nav.tpl"}
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-10 col-lg-8">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Usuario</th>
                  <th scope="col">Descripcion</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$usuarios item=usuario}
                  <tr>
                    <td>{$usuario->nombre}</td>
                    <td>
                    {if $usuario->admin eq 0}
                        Administrador
                    {else}
                        Usuario
                    {/if}   
                    </td>
                    <td><a href='borrarUser/{$usuario->id_usuario}'>Borrar</a></td>
                    <td><a href='setPermisos/{$usuario->id_usuario}'>
                    {if $usuario->admin eq 0}
                        Quitar Permiso
                    {else}
                        Agregar Permiso
                    {/if} 
                    </a></td>
                  </tr>
                  {/foreach}
              </tbody>
            </table>
            <h4 style="color=red;">{$mensaje}</h4>
        </div>

    </div>
</div>
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}