
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
<?php 
Session::forget('CORREO_ELECTRONICO');
Session::forget('ID_USUARIO');
Session::forget('NOMBRE');
?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Saliste</h3>
				<div class="d-flex justify-content-end social_icon">
					<img src="/assets/icon/logo.png" style="height:65px;width:65px;border-radius:100%; background:white;">
				</div>
			</div>
			<div class="card-body">
                <p>Nos veremos pronto </p>
			</div>
			<div class="card-footer">
				Se reiniciara en <label id="number"></label>
			</div>
		</div>
	</div>
</div>
<script>
var n = 0;
var l = document.getElementById("number");
window.setInterval(function(){
  l.innerHTML = n;
  n++;
  if(n == 5){
      location.href ="/";
  }
},1000);
</script>
</body>
</html>