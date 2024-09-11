<?php
 $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
 ?>
<div class="navbar-fixed">    
    <nav class="white  lighten-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="img/logo.png" height="55" width="60"></a>
    
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li <?php if($paginaCorrente == 'index02.php') {echo 'class="active"';}?>> <a class="black-text" href="#">Home</a></li>    
        <li <?php if($paginaCorrente == 'clientes.php') {echo 'class="active"'; } ?>> <a class="black-text" href="#">Clientes</a></li> 
        <li <?php if($paginaCorrente == 'quem.php') {echo 'class="active"'; } ?>><a class="black-text" href="#">Nós!</a></li>
      </ul>
    </div>
  </nav>
</div> 



        