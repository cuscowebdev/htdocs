<!DOCTYPE html>
<html lang="es">
<head>
	<title>proyecto Web - Taller de Programacion WEB</title>
	<meta charset="utf-8">
	<meta mane="description" content="Desarollaremos un proyecto web compelto con php y mysql">
   <meta name="Keywords" content="proyecto web,php,mysql.proyecto con php">
   <link rel="stylesheet" href="./css/mis/reset.css">
   <link rel="stylesheet" href="./css/mis/grid.css">
   <link rel="stylesheet" href="./css/mis/layout.css">
   <link rel="stylesheet" href="./css/mis/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<?php
		include "vista/includes/header.php";
      ?>
   <?php
      echo "<main class='index-container'>";
      include "vista/includes/nav.php";
   ?>
   <h2 class="ta-c">Nuestros Produtos</h2>
   <hr>
   <section class="container inicio d-f fxd-c jc-c ai-c fxw-w md-fxd-r ta-c color-white">
   <article class="d-f fxd-c">
       <div class="img-inicio">
           <img src="vista/site/300x300x1.png" alt="">
       </div>
       <div class="texto-inicio texto-inicio-1 bgc-celeste">
           <h2 class="inicio-title">Computadoras</h2>
           <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem libero, sed exercitationem culpa blanditiis veritatis. Quae magni ratione veritatis distinctio doloremque quo, natus quibusdam animi ea, iusto doloribus at maiores.</p>
       </div>
   </article>

   <article class="d-f md-fxd-cr fxd-c">
       <div class="img-inicio m0 p0">
           <img src="vista/site/300x300x3.png" alt="">
       </div>
       <div class="texto-inicio texto-inicio-var bgc-rosa m0 p0">
           <h2 class="inicio-title">Laptops</h2>
           <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur molestiae eaque ab in harum cumque, voluptatibus quas omnis, illo perferendis iste aliquam magni quos cupiditate dolores quaerat veniam possimus deserunt.</p>
       </div>
   </article>

   <article class="d-f fxd-c">
       <div class="img-inicio">
           <img src="vista/site/300x300x4.png" alt="">
       </div>
       <div class="texto-inicio texto-inicio-1 bgc-celeste">
           <h2 class="inicio-title">Impresoras</h2>
           <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem libero, sed exercitationem culpa blanditiis veritatis. Quae magni ratione veritatis distinctio doloremque quo, natus quibusdam animi ea, iusto doloribus at maiores.</p>
       </div>
   </article>

   <article class="d-f md-fxd-cr fxd-c">
       <div class="img-inicio m0 p0">
           <img src="vista/site/300x300.png" alt="">
       </div>
       <div class="texto-inicio texto-inicio-var bgc-rosa m0 p0">
           <h2 class="inicio-title">Sonido y Video</h2>
           <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur molestiae eaque ab in harum cumque, voluptatibus quas omnis, illo perferendis iste aliquam magni quos cupiditate dolores quaerat veniam possimus deserunt.</p>
       </div>
   </article>

</section><br>
<h2 class="ta-c">Los mejores precios</h2>
<hr>
   <section class="mejores-precios-container">
      <article class="mejores-precios-item">
         <div class="mejores-precios-content">
            <h3 class="mejores-precios-title fz2">Los Mejores precios</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati nostrum deleniti in eaque consectetur, nihil aliquid! Eligendi, vero molestiae. Possimus quidem impedit aliquam repellendus! Atque quasi dolore animi quas.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur blanditiis numquam voluptate odio iure laboriosam veniam nobis quia nostrum, cumque fuga nesciunt harum consectetur dolorum consequatur dolores inventore magnam magni.</p>
         </div>
         <div class="mejores-precios-image">
            <img src="./vista/site/1.jpg" alt="">
         </div>
      </article>
      <article class="mejores-precios-item">
         <div class="mejores-precios-content">
            <h3 class="mejores-precios-title fz2">Los Mejores precios</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati nostrum deleniti in eaque consectetur, nihil aliquid! Eligendi, vero molestiae. Possimus quidem impedit aliquam repellendus! Atque quasi dolore animi quas.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur blanditiis numquam voluptate odio iure laboriosam veniam nobis quia nostrum, cumque fuga nesciunt harum consectetur dolorum consequatur dolores inventore magnam magni.</p>
         </div>
         <div class="mejores-precios-image">
            <img src="./vista/site/2.jpg" alt="">
         </div>
      </article>
      <article class="mejores-precios-item">
         <div class="mejores-precios-content">
            <h3 class="mejores-precios-title fz2">Los Mejores precios</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati nostrum deleniti in eaque consectetur, nihil aliquid! Eligendi, vero molestiae. Possimus quidem impedit aliquam repellendus! Atque quasi dolore animi quas.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur blanditiis numquam voluptate odio iure laboriosam veniam nobis quia nostrum, cumque fuga nesciunt harum consectetur dolorum consequatur dolores inventore magnam magni.</p>
         </div>
         <div class="mejores-precios-image">
            <img src="./vista/site/4.jpg" alt="">
         </div>
      </article>

   </section>

   </main>
   
   <?php
	
		include "vista/includes/footer.php";
	 ?>
<?php
		if(!isset($_SESSION['name'])){
			loginForm();
		}
		else{
	?>
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
			<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
			<div style="clear:both"></div>
		</div>
		<div id="chatbox">
			<?php
				if(file_exists("log.html") && filesize("log.html") > 0){
					$handle = fopen("log.html", "r");
					$contents = fread($handle, filesize("log.html"));
					fclose($handle);echo $contents;
				}
			?>
		</div>
		<form name="message" action="">
			<input name="usermsg" type="text" id="usermsg" size="63"/>
			<input name="submitmsg" type="submit" id="submitmsg" value="Send"/>
		</form>
   </div>
   
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js">		
   </script>
   
	<script type="text/javascript">
	$(document).ready(function(){
		//Si el usuario quiere dejar la sesión
		$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}
		});
		
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){


			$("#submitmsg").click(function(){
			var clientmsg = $("#usermsg").val( );
			$.post("post.php", {text: clientmsg});
			$("#usermsg").attr("value", "");
			return false;
			});
		});	
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(loadLog,2500); //Recarga el archivo cada 2500 ms o x ms si deseas cambiar el segundo parámetro

			//Carga el archivo que contiene el log de chat
		function loadLog(){

			var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20;
			$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){
				$("#chatbox").html(html); //Inserta el log de chat en el div #chatbox

				
				var newscrollHeight = $("#chatbox")[0].scrollHeight - 20;
				console.log(newscrollHeight);
				if(newscrollHeight > oldscrollHeight){
				$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll hacia el fondo del div
				}
			},
			});
		}

		
		});	
	</script>
	<?php
		}
	?>

	<?php		
		function loginForm(){
		echo '
			<div id="loginform">
			<form action="index.php" method="post">
			<p>Please enter your name to continue:</p >
			<label for="name">Name:</label>
			<input type="text" name="name" id ="name" />
			<input type="submit" name="enter" id="enter" value="Enter" />
			</form>
			</div>
		';
		}
		if(isset($_POST['enter'])){
			if($_POST['name'] != ""){
				$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
				}
			else{
				echo '<span class="error">Please type in a name</span>';
				}
		}

		if(isset($_GET['logout'])){
			//Mensaje simple de salida
			$fp = fopen("log.html", 'a');
			fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i>
			<br></div>");
			fclose($fp);
			session_destroy();
			header("Location: index.php"); //Redirige al usuario
		}
	?>

</body>
</html>

