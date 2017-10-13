	<?php 
	session_start();
	if (!isset($_SESSION['contador'])) {
		$_SESSION['contador'] =0;
	}

	 ?>
	<header class="header-container">
      
      <img src="vista/site/banner.jpg">	
      <div class="header-item">
         <?php
            if (isset($_SESSION['usuario'])){
               echo "<div class='login-bienvenido'>";
               echo "<h2>Bienvenido ".$_SESSION['usuario']."</h2>";
               echo "<h3><a href='logout.php'>Cerrar sesión</a></h3>";
               echo "</div>";
            }else{
         ?>		
         <form action="login.php" method="GET" class="login-form">
            <div class="login-container">
               <div>
                  <input class="txt-usuario" type="text" name="txtusuario" placeholder="Ingresar el usuario" autofocus required>
                  <?php
                     if (isset($_GET['error'])){ if ($_GET['error'] == "usu"){ echo "Usuario Incorrecto"; } }
                  ?>
               </div>
               <div>
                  <input class="txt-password" type="password" name="txtpassword" placeholder="Ingresar la contraseña" required>
                  <?php
                     if (isset($_GET['error'])){ if($_GET['error'] == "pas"){ echo "Password Incorrecto"; } }
                  ?>
               </div>
               <div>
                  <input  class="ingresar1"  type="submit" name="btningresar" value="ingresar">
               </div>
            </div>
            <div class="login-register">
               <p>
                  <a href="vista/loginusuario.php">Registarse</a>
                  en caso no tengas una cuenta
               </p>   

            </div>
         </form>		
         <?php
            }
         ?>
      </div>
	</header>