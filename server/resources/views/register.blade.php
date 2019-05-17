<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
use \App\Http\Controllers\selectController;

$SEXOS = selectController::Data_in_select( "SEXO", "ID_SEXO", "3" );
$ZODIACO = selectController::Data_in_select( "ZODIACO", "ID_ZODIACO", "3" );
$RELIGION = selectController::Data_in_select( "RELIGION", "ID_RELIGION", "3" );
$MASCOTA = selectController::Data_in_select( "MASCOTA", "ID_MASCOTA", "3" );
$COLOR_CABELLO = selectController::Data_in_select( "COLOR_CABELLO", "ID_COLOR_CABELLO", "3" );
$MUDARSE = selectController::Data_in_select( "MUDARSE", "ID_MUDARSE", "3" );
$TIPO_RELACION = selectController::Data_in_select( "TIPO_RELACION", "ID_TIPO_RELACION", "3" );
$MAS_HIJOS = selectController::Data_in_select( "MAS_HIJOS", "ID_MAS_HIJOS", "3" );
$HIJOS = selectController::Data_in_select( "HIJOS", "ID_HIJOS", "3" );
$ESTADO_CIVIL = selectController::Data_in_select( "ESTADO_CIVIL", "ID_ESTADO_CIVIL", "3" );
$FUMA = selectController::Data_in_select( "FUMA", "ID_FUMA", "3" );
$BEBE = selectController::Data_in_select( "BEBE", "ID_BEBE", "3" );
$BELLO_FACIAL = selectController::Data_in_select( "BELLO_FACIAL", "ID_BELLO_FACIAL", "3" );
$ETNIA = selectController::Data_in_select( "ETNIA", "ID_ETNIA", "3" );
$TIPO_CUERPO = selectController::Data_in_select( "TIPO_CUERPO", "ID_TIPO_CUERPO", "3" );
$PESO = selectController::Data_in_select( "PESO", "ID_PESO", "3" );
$ESTATURA = selectController::Data_in_select( "ESTATURA", "ID_ESTATURA", "3" );
$VISION = selectController::Data_in_select( "VISION", "ID_VISION", "3" );
$COLOR_OJOS = selectController::Data_in_select( "COLOR_OJOS", "ID_COLOR_OJOS", "3" );
$TIPO_CABELLO = selectController::Data_in_select( "TIPO_CABELLO", "ID_TIPO_CABELLO", "3" );
$LONGITUD_CABELLO = selectController::Data_in_select( "LONGITUD_CABELLO", "ID_LONGITUD_CABELLO", "3" );
$PAIS = selectController::Data_in_select( "PAIS", "ID_PAIS", "0" );
$CIUDAD = selectController::Data_in_select( "CIUDAD", "ID_CIUDAD", "0" );

?>


<style>

</style>

<div class="container">

        <br><br><center><h3 style="color:white;">Register</h3></center>
	<div class="d-flex justify-content-center">
		<div class="card" style="width:100%;height:70%;" id="card_datos_basicos">
			<div class="card-header">
				<h3>Datos Basicos</h3>
				<div class="d-flex justify-content-end social_icon">
				<img src="/assets/icon/logo.png" style="height:65px;width:65px;border-radius:100%; background:white;">
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<input type="text" style="width:8%;" class="form-control" name="NOMBRE" id="NOMBRE" placeholder="NOMBRE">
						<input type="date" class="form-control" name="FECHA_NACIMIENTO" id="FECHA_NACIMIENTO" onchange="registro.edad()" placeholder="FECHA NACIMIENTO">
						<input type="text" style="width:60px;"  name="EDAD" id="EDAD" placeholder="EDAD" disabled>
					</div>
	  				<div class="input-group form-group">
						<input type="email" class="form-control" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" placeholder="CORREO ELECTRONICO">
						<input type="password" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="PASSWORD">
					</div>
      				<div class="input-group form-group">
						<select class="form-control" name="ID_PAIS" id="ID_PAIS">
						<option value="0">SELECCIONE PAIS</option>
						@foreach($PAIS as $obj)
							<option value="{{ $obj->ID_PAIS }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_CIUDAD" id="ID_CIUDAD">
						<option value="0">SELECCIONE CIUDAD</option>
						@foreach($CIUDAD as $obj)
							<option value="{{ $obj->ID_CIUDAD }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
					<div class="input-group form-group">
						<textarea type="text" class="form-control" name="TITULO_PERFIL" id="TITULO_PERFIL" placeholder="TITULO PERFIL"></textarea>
						<textarea type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" placeholder="DESCRIPCIÓN"></textarea>
					</div>
					<div class="input-group form-group">
						<select class="form-control" name="ID_SEXO" id="ID_SEXO">
						<option value="0">SELECCIONE SEXO</option>
						@foreach($SEXOS as $obj)
							<option value="{{ $obj->ID_SEXO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_RELIGION" id="ID_RELIGION">
						<option value="0">SELECCIONE RELIGION</option>
						@foreach($RELIGION as $obj)
							<option value="{{ $obj->ID_RELIGION }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_ZODIACO" id="ID_ZODIACO">
						<option value="0">SELECCIONE ZODIACO</option>
						@foreach($ZODIACO as $obj)
							<option value="{{ $obj->ID_ZODIACO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<div onclick="registro.siguiente(1)"  class="btn float-right login_btn">Siguiente</div>
					</div>
				</form>
			</div>
		</div>
        <div class="card" style="width:100%;height:70%;" id="card_datos_personales">
			<div class="card-header">
				<h3>Datos personales</h3>
				<div class="d-flex justify-content-end social_icon">
				<img src="/assets/icon/logo.png" style="height:65px;width:65px;border-radius:100%; background:white;">
				</div>
			</div>
			<div class="card-body">
				<form>
				<div class="input-group form-group">
						<select class="form-control" name="ID_ESTADO_CIVIL" id="ID_ESTADO_CIVIL">
						<option value="0">SELECCIONE ESTADO CIVIL</option>
						@foreach($ESTADO_CIVIL as $obj)
							<option value="{{ $obj->ID_ESTADO_CIVIL }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_TIPO_RELACION" id="ID_TIPO_RELACION">
						<option value="0">SELECCIONE TIPO_RELACION</option>
						@foreach($TIPO_RELACION as $obj)
							<option value="{{ $obj->ID_TIPO_RELACION }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
					<div class="input-group form-group">
						<select class="form-control" name="ID_HIJOS" id="ID_HIJOS">
						<option value="0">SELECCIONE HIJOS</option>
						@foreach($HIJOS as $obj)
							<option value="{{ $obj->ID_HIJOS }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="NUMERO_HIJOS" id="NUMERO_HIJOS">
						<option value="0">SELECCIONE NUMERO DE HIJOS</option>
						@foreach([0,1,2,3,4,5,6,7,8,9,10] as $obj)
							<option value="{{ $obj }}">{{ $obj }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_MAS_HIJOS" id="ID_MAS_HIJOS">
						<option value="0">SELECCIONE SI MAS HIJOS</option>
						@foreach($MAS_HIJOS as $obj)
							<option value="{{ $obj->ID_MAS_HIJOS }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
					<div class="input-group form-group">
						<select class="form-control" name="ID_BEBE" id="ID_BEBE">
						<option value="0">SELECCIONE BEBE</option>
						@foreach($BEBE as $obj)
							<option value="{{ $obj->ID_BEBE }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_FUMA" id="ID_FUMA">
						<option value="0">SELECCIONE FUMA</option>
						@foreach($FUMA as $obj)
							<option value="{{ $obj->ID_FUMA }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
      				<div class="input-group form-group">
						<select class="form-control" name="ID_MUDARSE" id="ID_MUDARSE">
						<option value="0">SELECCIONE MUDARSE</option>
						@foreach($MUDARSE as $obj)
							<option value="{{ $obj->ID_MUDARSE }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_ETNIA" id="ID_ETNIA">
						<option value="0">SELECCIONE ETNIA</option>
						@foreach($ETNIA as $obj)
							<option value="{{ $obj->ID_ETNIA }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_MASCOTA" id="ID_MASCOTA">
						<option value="0">SELECCIONE MASCOTA</option>
						@foreach($MASCOTA as $obj)
							<option value="{{ $obj->ID_MASCOTA }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
      				<div class="input-group form-group">
	  					<textarea name="CARACTERISTICAS_BUSCADAS" class="form-control" id="CARACTERISTICAS_BUSCADAS" placeholder="CARACTERISTICAS BUSCADAS"></textarea>						
					</div>
					<div class="form-group">
						<div onclick="registro.siguiente(2)" class="btn float-right login_btn">Siguiente</div>
					</div>
				</form>
			</div>
		</div>
        <div class="card" style="width:100%;height:70%;" id="card_datos_fisicos">
			<div class="card-header">
				<h3>Descripción física</h3>
				<div class="d-flex justify-content-end social_icon">
				<img src="/assets/icon/logo.png" style="height:65px;width:65px;border-radius:100%; background:white;">
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<select class="form-control" name="ID_LONGITUD_CABELLO" id="ID_LONGITUD_CABELLO">
						<option value="0">SELECCIONE LONGITUD CABELLO</option>
						@foreach($LONGITUD_CABELLO as $obj)
							<option value="{{ $obj->ID_LONGITUD_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_COLOR_CABELLO" id="ID_COLOR_CABELLO">
						<option value="0">SELECCIONE COLOR_CABELLO</option>
						@foreach($COLOR_CABELLO as $obj)
							<option value="{{ $obj->ID_COLOR_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_TIPO_CABELLO" id="ID_TIPO_CABELLO">
						<option value="0">SELECCIONE TIPO CABELLO</option>
						@foreach($TIPO_CABELLO as $obj)
							<option value="{{ $obj->ID_TIPO_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
      				<div class="input-group form-group">
						<select class="form-control" name="ID_COLOR_OJOS" id="ID_COLOR_OJOS">
						<option value="0">SELECCIONE COLOR_OJOS</option>
						@foreach($COLOR_OJOS as $obj)
							<option value="{{ $obj->ID_COLOR_OJOS }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_VISION" id="ID_VISION">
						<option value="0">SELECCIONE VISION</option>
						@foreach($VISION as $obj)
							<option value="{{ $obj->ID_VISION }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
      				<div class="input-group form-group">
						<select class="form-control" name="ID_ESTATURA" id="ID_ESTATURA">
						<option value="0">SELECCIONE ESTATURA</option>
						@foreach($ESTATURA as $obj)
							<option value="{{ $obj->ID_ESTATURA }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_PESO" id="ID_PESO">
						<option value="0">SELECCIONE PESO</option>
						@foreach($PESO as $obj)
							<option value="{{ $obj->ID_PESO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
      				<div class="input-group form-group">
						<select class="form-control" name="ID_TIPO_CUERPO" id="ID_TIPO_CUERPO">
						<option value="0">SELECCIONE TIPO_CUERPO</option>
						@foreach($TIPO_CUERPO as $obj)
							<option value="{{ $obj->ID_TIPO_CUERPO }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
						<select class="form-control" name="ID_BELLO_FACIAL" id="ID_BELLO_FACIAL">
						<option value="0">SELECCIONE BELLO_FACIAL</option>
						@foreach($BELLO_FACIAL as $obj)
							<option value="{{ $obj->ID_BELLO_FACIAL }}">{{ $obj->S_IDIOMA }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<div onclick="registro.guardar();" class="btn float-right login_btn">Guardar</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>

var registro = new Registro();

registro.initial();

function Registro(){
	this.initial = function init(){
		$('#card_datos_personales').hide();
		$('#card_datos_fisicos').hide();
		$('#card_datos_basicos').show();
	};

	this.siguiente = function(sig){
		if(sig == 1){
			//validar si los datos estan diligenciados
			if($('#NOMBRE').val() == ''){//ok
				alert("falta nombre");
			}	
			else if($('#FECHA_NACIMIENTO').val() == ''){
				alert("falta fecha nacimiento");
			}
			else if( $('#EDAD').val() == '' ){
				alert("falta edad");
			}
			else if( $('#CORREO_ELECTRONICO').val() == ''){
				alert("falta correo");
			}
			else if($('#PASSWORD').val() == ''){
				alert("falta password");
			}
			else if( $('#ID_PAIS').val() == '0' && 
					$('#ID_CIUDAD').val() == '0'){
				alert("falta ciudad");
			}
			else if( 
					$('#TITULO_PERFIL').val() == '' && 
					$('#DESCRIPCION').val() == '' && 
					$('#ID_SEXO').val() == '0' && 
					$('#ID_RELIGION').val() == '0' && 
					$('#ID_ZODIACO').val() == '0'){
				alert("faltan otros datos");
			}
			else{
				$('#card_datos_personales').show();
				$('#card_datos_fisicos').hide();
				$('#card_datos_basicos').hide();
			}		
		}
		else if(sig == 2){
			if(
				$('#ID_ESTADO_CIVIL').val() != '0' &&
				$('#ID_TIPO_RELACION').val() != '0' &&
				$('#ID_HIJOS').val() != '0' &&
				$('#NUMERO_HIJOS').val() != '' &&
				$('#ID_MAS_HIJOS').val() != '0' &&
				$('#ID_BEBE').val() != '0' &&
				$('#ID_FUMA').val() != '0' &&
				$('#ID_MUDARSE').val() != '0' &&
				$('#ID_ETNIA').val() != '0' &&
				$('#ID_MASCOTA').val() != '0' &&
				$('#CARACTERISTICAS_BUSCADAS').val() != '' 
			){ //ok
				$('#card_datos_personales').hide();
				$('#card_datos_fisicos').show();
				$('#card_datos_basicos').hide();
			}
			else{
				alert("Debe diligenciar todos los datos");
			}			
		}
	};

	this.guardar = function(){
		if(
			$('#ID_LONGITUD_CABELLO').val() != '0' &&
			$('#ID_COLOR_CABELLO').val() != '0' &&
			$('#ID_TIPO_CABELLO').val() != '0' &&
			$('#ID_COLOR_OJOS').val() != '0' &&
			$('#ID_VISION').val() != '0' &&
			$('#ID_ESTATURA').val() != '0' &&
			$('#ID_PESO').val() != '0' &&
			$('#ID_TIPO_CUERPO').val() != '0' &&
			$('#ID_BELLO_FACIAL').val() != '0' 
		){//ok
			//save
		var parametros = {
					"NOMBRE" : $('#NOMBRE').val(),
					"FECHA_NACIMIENTO" : $('#FECHA_NACIMIENTO').val(),
					"EDAD" : $('#EDAD').val(),
					"CORREO_ELECTRONICO" : $('#CORREO_ELECTRONICO').val(),
					"PASSWORD" : $('#PASSWORD').val(),
					"ID_PAIS" : $('#ID_PAIS').val(),
					"ID_CIUDAD" : $('#ID_CIUDAD').val(),
					"TITULO_PERFIL" : $('#TITULO_PERFIL').val(),
					"DESCRIPCION" : $('#DESCRIPCION').val(),
					"ID_SEXO" : $('#ID_SEXO').val(),
					"ID_RELIGION" : $('#ID_RELIGION').val(),
					"ID_ZODIACO" : $('#ID_ZODIACO').val(),
					"ID_ESTADO_CIVIL" : $('#ID_ESTADO_CIVIL').val(),
					"ID_TIPO_RELACION" : $('#ID_TIPO_RELACION').val(),
					"ID_HIJOS" : $('#ID_HIJOS').val(),
					"NUMERO_HIJOS" : $('#NUMERO_HIJOS').val(),
					"ID_MAS_HIJOS" : $('#ID_MAS_HIJOS').val(),
					"ID_BEBE" : $('#ID_BEBE').val(),
					"ID_FUMA" : $('#ID_FUMA').val(),
					"ID_MUDARSE" : $('#ID_MUDARSE').val(),
					"ID_ETNIA" : $('#ID_ETNIA').val(),
					"ID_BELLO_FACIAL" : $('#ID_BELLO_FACIAL').val(),
					"ID_MASCOTA" : $('#ID_MASCOTA').val(),
					"CARACTERISTICAS_BUSCADAS" : $('#CARACTERISTICAS_BUSCADAS').val(),
					"ID_LONGITUD_CABELLO" : $('#ID_LONGITUD_CABELLO').val(),
					"ID_COLOR_CABELLO" : $('#ID_COLOR_CABELLO').val(),
					"ID_TIPO_CABELLO" : $('#ID_TIPO_CABELLO').val(),
					"ID_COLOR_OJOS" : $('#ID_COLOR_OJOS').val(),
					"ID_VISION" : $('#ID_VISION').val(),
					"ID_ESTATURA" : $('#ID_ESTATURA').val(),
					"ID_PESO" : $('#ID_PESO').val(),
					"ID_TIPO_CUERPO" : $('#ID_TIPO_CUERPO').val(),
					"ID_PERFIL" : 1,
					"ID_ESTADO_PERSONA" : 1,
					"ULTIMA_FECHA_CONEXION" : "000000",
					"FECHA_CREACION" : "000000"
				};
			$.ajax({
				type: 'post',
				url: 'registrar',
				data: parametros,
				beforeSend: function () {
					$('#resultado').html('<p>Espere porfavor</p>');
				},
				success: function (response)  {
					console.log(response);
					if(response=>succes == 'OK'){
						alert("Bienvenido");
						location.href ="/";
					}
					else {
						alert("algo quedo mal");
					}
				}
			});
		}
		else{
			alert("Debe diligenciar todos los datos");
		}
	};

	this.edad = function(){
		function calcularEdad(fecha) {
			var hoy = new Date();
			var cumpleanos = new Date(fecha);
			var edad = hoy.getFullYear() - cumpleanos.getFullYear();
			var m = hoy.getMonth() - cumpleanos.getMonth();

			if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
				edad--;
			}

			return edad;
		}
		
		$('#EDAD').val(calcularEdad($('#FECHA_NACIMIENTO').val()));
		
	}

	

}

</script>


</body>
</html>