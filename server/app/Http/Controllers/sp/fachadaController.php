<?php

namespace App\Http\Controllers\sp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class fachadaController extends Controller
{
    /**
     *  @P_ID_CHAT								INT = 0
	 * ,@P_ID_USUARIO_RECIBE                   INT = 0
	 * ,@P_ID_USUARIO_ENVIA					INT = 0
	 * ,@P_ID_ESTADO_MENSAJE                   INT = 0
	 * ,@P_MENSAJE								VARCHAR(MAX)    = NULL
	 * ,@P_FECHA_ENVIO							VARCHAR(11)    = NULL
	 * ,@P_FECHA_LECTURA						VARCHAR(11)    = NULL
	 * ,@p_opcion
     */
    static public function SP_ADMINISTRAR_CHAT(
            $P_ID_CHAT, 
            $P_ID_USUARIO_RECIBE,
            $P_ID_USUARIO_ENVIA,
            $P_ID_ESTADO_MENSAJE,
            $P_MENSAJE,
            $P_FECHA_ENVIO,
            $P_FECHA_LECTURA,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_CHAT] ?, ?, ?, ?, ?, ?, ?, ? ",
                            [$P_ID_CHAT, 
                            $P_ID_USUARIO_RECIBE,
                            $P_ID_USUARIO_ENVIA,
                            $P_ID_ESTADO_MENSAJE,
                            $P_MENSAJE,
                            $P_FECHA_ENVIO,
                            $P_FECHA_LECTURA,
                            $p_opcion]);
        return $sp;        
    }

    /**
     * @P_ID_USUARIO_RECIBE                    INT = 0
	 * ,@P_ID_FAVORITO                         INT = 0
	 * ,@P_ID_USUARIO_FAVORITO					INT = 0
	 * ,@p_opcion				                INT = 0
     */
    static public function SP_ADMINISTRAR_FAVORITO(
            $P_ID_USUARIO_RECIBE, 
            $P_ID_FAVORITO,
            $P_ID_USUARIO_FAVORITO,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_FAVORITO] ? ? ? ? ",
                            [$P_ID_USUARIO_RECIBE, 
                            $P_ID_FAVORITO,
                            $P_ID_USUARIO_FAVORITO,
                            $p_opcion]);
        return $sp;        
    }

    /**
     * @P_ID_FOTO								INT = 0
	 * ,@P_ID_USUARIO                          INT = 0
	 * ,@P_URL_FOTO 							VARCHAR(MAX)    = NULL
	 * ,@p_opcion				                INT = 0
     */
    static public function SP_ADMINISTRAR_FOTOS(
            $P_ID_FOTO, 
            $P_ID_USUARIO,
            $P_URL_FOTO,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_FOTOS] ?, ?, ?, ? ",
                            [$P_ID_FOTO, 
                            $P_ID_USUARIO,
                            $P_URL_FOTO,
                            $p_opcion]);
        return $sp;        
    }

    /**
     * @P_ID_ME_GUSTA_IMAGEN                   INT = 0
	 * ,@P_ID_FOTO                             INT = 0
	 * ,@P_ID_USUARIO_MEGUSTA                  INT = 0
	 * ,@P_ID_ESTADO_MEGUSTA                   INT = 0
	 * ,@p_opcion				                INT = 0
     */
    static public function SP_ADMINISTRAR_MEGUSTA_IMAGEN(
            $P_ID_ME_GUSTA_IMAGEN, 
            $P_ID_FOTO,
            $P_ID_USUARIO_MEGUSTA,
            $P_ID_ESTADO_MEGUSTA,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_MEGUSTA_IMAGEN] ? ? ? ? ? ",
                            [$P_ID_ME_GUSTA_IMAGEN, 
                            $P_ID_FOTO,
                            $P_ID_USUARIO_MEGUSTA,
                            $P_ID_ESTADO_MEGUSTA,
                            $p_opcion]);
        return $sp;        
    }

    /**
     * @P_ID_MEGUSTA_USUARIO                   INT = 0
	 * ,@P_ID_USUARIO_RECIBE                   INT = 0
	 * ,@P_ID_USUARIO_MEGUSTA                  INT = 0
	 * ,@P_ID_ESTADO_MEGUSTA                   INT = 0
	 * ,@p_opcion				                INT = 0
     */
    static public function SP_ADMINISTRAR_MEGUSTA_USUARIO(
            $P_ID_MEGUSTA_USUARIO, 
            $P_ID_USUARIO_RECIBE,
            $P_ID_USUARIO_MEGUSTA,
            $P_ID_ESTADO_MEGUSTA,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_MEGUSTA_USUARIO] ? ? ? ? ? ",
                            [$P_ID_MEGUSTA_USUARIO, 
                            $P_ID_USUARIO_RECIBE,
                            $P_ID_USUARIO_MEGUSTA,
                            $P_ID_ESTADO_MEGUSTA,
                            $p_opcion]);
        return $sp;        
    }

    /**
     * 	@P_ID_USUARIO                          INT = 0
	 * 	,@P_NOMBRE                             VARCHAR(MAX)    = NULL
	 * 	,@P_ID_SEXO                            INT = 0
	 * 	,@P_FECHA_NACIMIENTO                   VARCHAR(11)    = NULL
	 * 	,@P_ID_PAIS                            INT = 0
	 * 	,@P_ID_CIUDAD                          INT = 0
	 * 	,@P_ID_COLOR_CABELLO                   INT = 0
	 * 	,@P_ID_LONGITUD_CABELLO                INT = 0
	 * 	,@P_ID_TIPO_CABELLO                    INT = 0
	 * 	,@P_ID_COLOR_OJOS                      INT = 0
	 * 	,@P_ID_VISION                          INT = 0
	 * 	,@P_ID_ESTATURA                        INT = 0
	 * 	,@P_ID_PESO                            INT = 0
	 * 	,@P_ID_TIPO_CUERPO                     INT = 0
	 * 	,@P_ID_ETNIA                           INT = 0
	 * 	,@P_ID_BELLO_FACIAL                    INT = 0
	 * 	,@P_ID_BEBE                            INT = 0
	 * 	,@P_ID_FUMA                            INT = 0
	 * 	,@P_ID_ESTADO_CIVIL                    INT = 0
	 * 	,@P_ID_HIJOS                           INT = 0
	 * 	,@P_NUMERO_HIJOS                       INT = 0
	 * 	,@P_ID_MAS_HIJOS                       INT = 0
	 * 	,@P_ID_TIPO_RELACION                   INT = 0
	 * 	,@P_ID_MUDARSE                         INT = 0
	 * 	,@P_TITULO_PERFIL                      VARCHAR(MAX)    = NULL
	 * 	,@P_DESCRIPCION                        VARCHAR(MAX)    = NULL
	 * 	,@P_CARACTERISTICAS_BUSCADAS           VARCHAR(MAX)    = NULL
	 * 	,@P_ID_PERFIL                          INT = 0
	 * 	,@P_ID_ESTADO_PERSONA				   INT = 0
	 * 	,@P_ID_PAGO                            INT = 0
	 * 	,@P_ULTIMA_FECHA_CONEXION              VARCHAR(11)    = NULL
	 * 	,@P_CORREO_ELECTRONICO                 VARCHAR(50)    = NULL
	 * 	,@P_CONTRASEÑA                         VARCHAR(10)    = NULL
	 * 	,@P_FECHA_CREACION                     VARCHAR(11)    = NULL
	 * 	,@P_ID_RELIGION                        INT = 0
	 * 	,@P_ID_ZODIACO                         INT = 0
	 * 	,@P_ID_MASCOTA                         INT = 0
	 * 	,@p_opcion				               INT = 0
     */
    static public function SP_ADMINISTRAR_USUARIOS(
            $P_ID_USUARIO,
            $P_NOMBRE,
            $P_ID_SEXO,
            $P_FECHA_NACIMIENTO,
            $P_ID_PAIS,
            $P_ID_CIUDAD,
            $P_ID_COLOR_CABELLO,
            $P_ID_LONGITUD_CABELLO,
            $P_ID_TIPO_CABELLO,
            $P_ID_COLOR_OJOS,
            $P_ID_VISION,
            $P_ID_ESTATURA,
            $P_ID_PESO,
            $P_ID_TIPO_CUERPO,
            $P_ID_ETNIA,
            $P_ID_BELLO_FACIAL,
            $P_ID_BEBE,
            $P_ID_FUMA,
            $P_ID_ESTADO_CIVIL,
            $P_ID_HIJOS,
            $P_NUMERO_HIJOS,
            $P_ID_MAS_HIJOS,
            $P_ID_TIPO_RELACION,
            $P_ID_MUDARSE,
            $P_TITULO_PERFIL,
            $P_DESCRIPCION,
            $P_CARACTERISTICAS_BUSCADAS,
            $P_ID_PERFIL,
            $P_ID_ESTADO_PERSONA,
            $P_ID_PAGO,
            $P_ULTIMA_FECHA_CONEXION,
            $P_CORREO_ELECTRONICO,
            $P_CONTRASENA,
            $P_FECHA_CREACION,
            $P_ID_RELIGION,
            $P_ID_ZODIACO,
            $P_ID_MASCOTA,
            $p_opcion){

        $sp = DB::select("EXEC [amor_on_line].[dbo].[SP_ADMINISTRAR_USUARIOS] ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ",
                            [$P_ID_USUARIO,
                            $P_NOMBRE,
                            $P_ID_SEXO,
                            $P_FECHA_NACIMIENTO,
                            $P_ID_PAIS,
                            $P_ID_CIUDAD,
                            $P_ID_COLOR_CABELLO,
                            $P_ID_LONGITUD_CABELLO,
                            $P_ID_TIPO_CABELLO,
                            $P_ID_COLOR_OJOS,
                            $P_ID_VISION,
                            $P_ID_ESTATURA,
                            $P_ID_PESO,
                            $P_ID_TIPO_CUERPO,
                            $P_ID_ETNIA,
                            $P_ID_BELLO_FACIAL,
                            $P_ID_BEBE,
                            $P_ID_FUMA,
                            $P_ID_ESTADO_CIVIL,
                            $P_ID_HIJOS,
                            $P_NUMERO_HIJOS,
                            $P_ID_MAS_HIJOS,
                            $P_ID_TIPO_RELACION,
                            $P_ID_MUDARSE,
                            $P_TITULO_PERFIL,
                            $P_DESCRIPCION,
                            $P_CARACTERISTICAS_BUSCADAS,
                            $P_ID_PERFIL,
                            $P_ID_ESTADO_PERSONA,
                            $P_ID_PAGO,
                            $P_ULTIMA_FECHA_CONEXION,
                            $P_CORREO_ELECTRONICO,
                            $P_CONTRASENA,
                            $P_FECHA_CREACION,
                            $P_ID_RELIGION,
                            $P_ID_ZODIACO,
                            $P_ID_MASCOTA,
                            $p_opcion]);
        return $sp;        
    }
}
