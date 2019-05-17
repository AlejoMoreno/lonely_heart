<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Session;

use DB;
use Illuminate\Http\Request;
use \App\Http\Controllers\sp\fachadaController;
use App\Fotos;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    static public function register(Request $request){
    
        //dd($request);
        DB::insert("INSERT INTO [amor_on_line].[dbo].[USUARIOS]
        ([NOMBRE]
        ,[ID_SEXO]
        ,[FECHA_NACIMIENTO]
        ,[ID_PAIS]
        ,[ID_CIUDAD]
        ,[ID_LONGITUD_CABELLO]
        ,[ID_TIPO_CABELLO]
        ,[ID_COLOR_OJOS]
        ,[ID_VISION]
        ,[ID_ESTATURA]
        ,[ID_PESO]
        ,[ID_TIPO_CUERPO]
        ,[ID_ETNIA]
        ,[ID_BELLO_FACIAL]
        ,[ID_BEBE]
        ,[ID_FUMA]
        ,[ID_ESTADO_CIVIL]
        ,[ID_HIJOS]
        ,[NUMERO_HIJOS]
        ,[ID_MAS_HIJOS]
        ,[ID_TIPO_RELACION]
        ,[ID_MUDARSE]
        ,[TITULO_PERFIL]
        ,[DESCRIPCION]
        ,[CARACTERISTICAS_BUSCADAS]
        ,[ID_PERFIL]
        ,[ID_ESTADO_PERSONA]
        ,[CORREO_ELECTRONICO]
        ,[CONTRASENA]
        ,[ULTIMA_FECHA_CONEXION]
        ,[ID_COLOR_CABELLO]
        ,[FECHA_CREACION]
        ,[ID_MASCOTA]
        ,[ID_RELIGION]
        ,[ID_ZODIACO])
        VALUES
            ('".$request->NOMBRE."',
             1,
             ".$request->FECHA_NACIMIENTO.",
             ".$request->ID_PAIS.",
             ".$request->ID_CIUDAD.",
             ".$request->ID_LONGITUD_CABELLO.",
             ".$request->ID_TIPO_CABELLO.",
             ".$request->ID_COLOR_OJOS.",
             ".$request->ID_VISION.",
             ".$request->ID_ESTATURA.",
             ".$request->ID_PESO.",
             ".$request->ID_TIPO_CUERPO.",
             ".$request->ID_ETNIA.",
             ".$request->ID_BELLO_FACIAL.",
             ".$request->ID_BEBE.",
             ".$request->ID_FUMA.",
             ".$request->ID_ESTADO_CIVIL.",
             ".$request->ID_HIJOS.",
             ".$request->NUMERO_HIJOS.",
             ".$request->ID_MAS_HIJOS.",
             ".$request->ID_TIPO_RELACION.",
             ".$request->ID_MUDARSE.",
             '".$request->TITULO_PERFIL."',
             '".$request->DESCRIPCION."',
             '".$request->CARACTERISTICAS_BUSCADAS."',
             ".$request->ID_PERFIL.",
             ".$request->ID_ESTADO_PERSONA.",
             '".$request->CORREO_ELECTRONICO."',
             '".$request->PASSWORD."',
             ".date("Y/m/d").",
             ".$request->ID_COLOR_CABELLO.",
             ".date("Y/m/d").",
             ".$request->ID_MASCOTA.",
             ".$request->ID_RELIGION.",
             ".$request->ID_ZODIACO.")");
        return array("succes"=>"OK");
    }

    public function login(Request $request){
        try{
            //reset all sessions
            Session::forget('CORREO_ELECTRONICO');
            Session::forget('ID_USUARIO');
            Session::forget('NOMBRE');
            //if have results
            $result = DB::select("SELECT 
                *
                FROM [amor_on_line].[dbo].[USUARIOS]
                WHERE CORREO_ELECTRONICO = '".$request->username."'
                AND CONTRASENA = '".$request->password."'");
            if(sizeof($result)==0){
                return array("succes"=>array(["CORREO_ELECTRONICO"=>"NA"]));
            }
            else{
                Session::put('CORREO_ELECTRONICO',$result[0]->CORREO_ELECTRONICO);
                Session::put('ID_USUARIO',$result[0]->ID_USUARIO);
                Session::put('NOMBRE',$result[0]->NOMBRE);
                return array("succes"=>$result);
            }
            
        }
        catch(Exception $e){
            return array("succes"=>$e);
        }
        
    }

    public function perfil($id){
        $usuario = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] WHERE ID_USUARIO = '.$id);
        
        return view('profile',array("resultado"=>$usuario));
    }

    public function save_file(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');
        $uploads_dir = 'public/LonelyHeart/Fotos/User_'.$request->id;
        $url = 'C:/Users/fredy/Trabajo/emerson/lonely_heart/lonely_heart/server/storage/app/';
    
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        //$path = $file->getPathName();
    
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $path = \Storage::disk('local')->put($uploads_dir."/".$nombre,  \File::get($file));
        //chmod($uploads_dir."/".$nombre,0644);
        //$flag = move_uploaded_file($nombre, $uploads_dir."/".$nombre);

        //dd($uploads_dir."/".$nombre);

        fachadaController::SP_ADMINISTRAR_FOTOS(
            0, 
            $request->id,
            $url.$uploads_dir."/".$nombre,
            2);
    
        return redirect('/my_profile');
    }

    public function chat($id){
        $usuario = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] WHERE ID_USUARIO = '.$id);
        $P_ID_CHAT = 0;
        $P_ID_USUARIO_RECIBE = $usuario[0]->ID_USUARIO;
        $P_ID_USUARIO_ENVIA = Session::get("ID_USUARIO");
        $P_ID_ESTADO_MENSAJE  = 0;
        $P_MENSAJE  = "";
        $P_FECHA_ENVIO  = "";
        $P_FECHA_LECTURA  = "";
        $p_opcion  = "4";
        
        $chat = fachadaController::SP_ADMINISTRAR_CHAT($P_ID_CHAT, 
            $P_ID_USUARIO_RECIBE,
            $P_ID_USUARIO_ENVIA,
            $P_ID_ESTADO_MENSAJE,
            $P_MENSAJE,
            $P_FECHA_ENVIO,
            $P_FECHA_LECTURA,
            $p_opcion
        );
        return view('mensajes',array("usuario"=>$usuario, "chat"=>$chat));
    }

    public function storeChat(Request $request){
        $P_ID_CHAT = 0;
        $P_ID_USUARIO_RECIBE = $request->ID_USUARIO_RECIBE;
        $P_ID_USUARIO_ENVIA = Session::get("ID_USUARIO");
        $P_ID_ESTADO_MENSAJE  = $request->ID_ESTADO_MENSAJE;
        $P_MENSAJE  = $request->MENSAJES;
        $P_FECHA_ENVIO  = "";
        $P_FECHA_LECTURA  = "";
        $p_opcion  = "2";
        
        $chat = fachadaController::SP_ADMINISTRAR_CHAT($P_ID_CHAT, 
            $P_ID_USUARIO_RECIBE,
            $P_ID_USUARIO_ENVIA,
            $P_ID_ESTADO_MENSAJE,
            $P_MENSAJE,
            $P_FECHA_ENVIO,
            $P_FECHA_LECTURA,
            $p_opcion
        );
        return array("succes"=>$chat);
    }
}
