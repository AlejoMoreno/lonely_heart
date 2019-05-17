
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<img src="/assets/icon/logo.png" style="height:65px;width:65px;border-radius:100%; background:white;">
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" id="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" id="password" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<div class="btn float-right login_btn" onclick="login.logueo()">Iniciar</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes cuenta?<a href="/registrar">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="/forgot">Recuperar Contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

var login =  new Login();

function Login(){
	this.init = function(){

	};

	this.logueo = function(){
		var parametros = {
			"username" : $('#username').val(),
			"password" : $('#password').val()
		};
		$.ajax({
			type: 'post',
			url: 'logueo',
			data: parametros,
			beforeSend: function () {
				$('#resultado').html('<p>Espere porfavor</p>');
			},
			success: function (response)  {
				console.log(response);
				respuesta = response.succes[0].CORREO_ELECTRONICO;
				if(respuesta != "NA"){
					localStorage.setItem("CARACTERISTICAS_BUSCADAS",response.succes[0].CARACTERISTICAS_BUSCADAS);
					localStorage.setItem("CONTRASENA",response.succes[0].CONTRASENA);
					localStorage.setItem("CORREO_ELECTRONICO",response.succes[0].CORREO_ELECTRONICO);
					localStorage.setItem("DESCRIPCION",response.succes[0].DESCRIPCION);
					localStorage.setItem("NOMBRE",response.succes[0].NOMBRE);
					alert("Bienvenido "+response.succes[0].CORREO_ELECTRONICO);
					location.href ="/index";
				}
				else{
					alert("Datos incorrectos");
				}
				
			}
		});
	};
}

</script>

</body>
</html>