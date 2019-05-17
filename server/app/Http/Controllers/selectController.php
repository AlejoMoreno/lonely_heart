<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class selectController extends Controller
{
    #--region select in all idioms -------
    /**
     * $table is a name of table in database
     * $id_name is a name of id in this table
     * $idiom is a number of idiom in this table
     */
    static public function Data_in_select( $table, $id_name, $idiom ){
        if($idiom == '0'){
            return DB::select('SELECT ['. $id_name .'] ,[IDIOMA] AS [S_IDIOMA] FROM [amor_on_line].[dbo].['. $table .']');
        }
        else{
            return DB::select('SELECT ['. $id_name .'], [IDIOMA_'. $idiom .'] AS [S_IDIOMA] FROM [amor_on_line].[dbo].['. $table .']');
        }
        
    }
    #--END region select in all idioms -------
    
    #--region insert in all idioms -------
    /**
     * $table is a name of table in database
     * $data is the array wich have a word traslate in 15 lenguages
     */
    public function Insert_in_select(Request $request){
        $table = $request->table;
        $data = $request->data;
        DB::insert("INSERT INTO [amor_on_line].[dbo].[". $table ."] (IDIOMA, IDIOMA_1, IDIOMA_2, IDIOMA_3, IDIOMA_4, IDIOMA_5, IDIOMA_6,
            IDIOMA_7, IDIOMA_8, IDIOMA_9, IDIOMA_10, IDIOMA_11, IDIOMA_12, IDIOMA_13, IDIOMA_14) 
            values ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', 
            '".$data[5]."', '".$data[6]."', '".$data[7]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', 
            '".$data[11]."', '".$data[12]."', '".$data[13]."', '".$data[14]."')");
    }

    static public function Insert_in($table, $data){
        DB::insert("INSERT INTO [amor_on_line].[dbo].[". $table ."] (IDIOMA, IDIOMA_1, IDIOMA_2, IDIOMA_3, IDIOMA_4, IDIOMA_5, IDIOMA_6,
            IDIOMA_7, IDIOMA_8, IDIOMA_9, IDIOMA_10, IDIOMA_11, IDIOMA_12, IDIOMA_13, IDIOMA_14) 
            values ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', 
            '".$data[5]."', '".$data[6]."', '".$data[7]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', 
            '".$data[11]."', '".$data[12]."', '".$data[13]."', '".$data[14]."')");
    }
    #--END region insert in all idioms -------

}
