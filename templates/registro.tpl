{include file="./header.tpl"}
{include file="./nav.tpl"}
         <div class="row d-flex justify-content-center">
             <div class="col-8  d-flex justify-content-center">
                <form action="registrar" method="post">
                    <input type="text" name="nombre" placeholder="nombre">
                    <input type="password" name="clave" placeholder="clave">
                    <input type="submit" value="Registrar">
                </form> 
             </div>
         </div>
{include file="./footer.tpl"}
{include file="./footerApp.tpl"}