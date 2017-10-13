$(document).ready(iniciar);

function iniciar(){
	$("#btnregistrar").click(enviardatos);
	//$("#btningresar").click(comparardatos);
	$(".botoncompra").click(anadirproducto);
}

function anadirproducto() {
	$("#carrito").load("carrito/poncarrito.php?p="+$(this).val());
}

function enviardatos(){
	//capturar al usuario y a la contraseña
	var usuario = $("#txtusuario").val();
	var pass = $("#txtpassword").val();
	var conf = $("#txtconfirmar").val();
	if (pass == conf){
		$.ajax({
			url:"insertar.php",
			success:function(resultado){
				$("#resultado").html(resultado);
			},
			data:{
				usuario:usuario,
				pass:pass
			},
			type:"GET"
		});
	}else{
		$("#mensaje").html("Sus contraseñas no coinciden");
	}	
}

/*function comparardatos(){
	//capturar los datos del usuario y la contraseña
	var usu = $("#txtusuario").val();
	var con = $("#txtpassword").val();
	//sincronizar con ajax el logueo
	$.ajax({
			url:"login.php",
			success:function(resultado){
				alert(resultado);
			},
			data:{
				usuario:usu,
				pass:con
			},
			type:"GET"
		});
}*/