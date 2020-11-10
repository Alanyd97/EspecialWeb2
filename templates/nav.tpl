<nav class="navbar nav-app d-flex justify-content-start" >
  <a class="navbar-brand" href="{BASE_URL}">
    <img src="./FrontEnd/images/logo.png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
 <div class="links-container">
    <ul class="nav navbar-nav navbar-right d-inline">
    <li class="links-nav"><a class="link" href="juegos">Inicio</a></li>
    {if $usuario == 0 || $usuario == 1}
        <li class="links-nav"><a href="logOut" class="link " >Log Out</a></li>
    {elseif $usuario == 2}
        <li class="links-nav"><a class="link" href="login">Log In</a></li>
    {/if}
    </ul>
 </div>

</nav>
