<?php 

//include the structure procedure (LISTS selected)
//example ... \DB::select('CALL USP_CALCULO_CUOTA_WEB(?,?,?,?,?,?,?,?,?)', array($v_CODIGO_MONEDA, $v_CODIGO_SUBPRODUCTO, $v_CODIGO_DEPARTAMENTO, $v_IMPORTE_BIEN, $v_CUOTA_INICIAL, $v_PLAZO, $v_CORREO, $v_TELEFONO, $v_NOMBRE ));

use \App\Http\Controllers\selectController;

$sexo = selectController::Data_in_select( "SEXO", "ID_SEXO", "3" );

?>

<select class="form-control" name="ID_SEXO" id="NOMBRE">
@foreach($sexo as $obj)
	<option value="{{ $obj->ID_SEXO }}">{{ $obj->S_IDIOMA }}</option>
@endforeach
</select>

<?php 

$array_datos = array();
for($i = 0; $i < 15; $i++){
	array_push($array_datos,"idioma ".$i);
}

//print_r($array_datos);
/*
selectController::Insert_in("SEXO",$array_datos);
selectController::Insert_in("BEBE",$array_datos);
selectController::Insert_in("BELLO_FACIAL",$array_datos);
selectController::Insert_in("COLOR_CABELLO",$array_datos);
selectController::Insert_in("COLOR_OJOS",$array_datos);
selectController::Insert_in("ESTADO_CIVIL",$array_datos);
selectController::Insert_in("SEXO",$array_datos);
selectController::Insert_in("ESTADO_ME_GUSTA",$array_datos);
selectController::Insert_in("ESTADO_MENSAJE",$array_datos);
selectController::Insert_in("SEXO",$array_datos);
selectController::Insert_in("ESTATURA",$array_datos);
selectController::Insert_in("ETNIA",$array_datos);
selectController::Insert_in("FUMA",$array_datos);
selectController::Insert_in("HIJOS",$array_datos);
selectController::Insert_in("LONGITUD_CABELLO",$array_datos);
selectController::Insert_in("MAS_HIJOS",$array_datos);
selectController::Insert_in("MASCOTA",$array_datos);
selectController::Insert_in("MUDARSE",$array_datos);
selectController::Insert_in("PESO",$array_datos);
selectController::Insert_in("RELIGION",$array_datos);
selectController::Insert_in("TIPO_CABELLO",$array_datos);
selectController::Insert_in("TIPO_CUERPO",$array_datos);
selectController::Insert_in("TIPO_RELACION",$array_datos);
selectController::Insert_in("VISION",$array_datos);
selectController::Insert_in("ZODIACO",$array_datos);*/


?>