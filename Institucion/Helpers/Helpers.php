<?php 


function base_url()
{
    return BASE_URL;
}


/**
 * nos va ayudar a mosstrar los objetos
 * muestra informacion formateada
 * mostrar los arrays
 */


 function dep($data){
     $format = print_r('<pre>');
     $format = print_r($data);
     $format = print_r('</pre>');
     return $format;
 }

 /**
  * evitar inyeccion SQL
  */
 function strClean($strCadena){
     $String = preg_replace(['/\s+/','/^\s|\s$/'], ['', ''], $strCadena);
     $trim   = trim($String); //elimina espacios en blanco y al inicio y al final
     $String = stripslashes($String); // Elimina las \ Invertidas.
     $String = str_ireplace("<script>", "", $String); //
     $String = str_ireplace("</script>", "", $String); //
     $String = str_ireplace("<script src>", "", $String); //
     $String = str_ireplace("<script type=>", "", $String); //
     $String = str_ireplace("SELECT * FROM", "", $String); //
     $String = str_ireplace("DELETE FROM", "", $String); //
     $String = str_ireplace("INSERT INTO", "", $String); //
     $String = str_ireplace("SELECT COUNT(*) FROM", "", $String); //
     $String = str_ireplace("DROP TABLE", "", $String); //
     $String = str_ireplace("OR '1'='1","", $String); //
     $String = str_ireplace('OR "1"="1"',"", $String); //
     $String = str_ireplace("is NULL; --","" ,$String); //
     $String = str_ireplace("is NULL; --","" ,$String); //
     $String = str_ireplace("LIKE '", "" ,$String); //
     $String = str_ireplace('LIKE "', "" ,$String); //
     $String = str_ireplace("OR 'a'='a", "" ,$String); //
     $String = str_ireplace('OR "a"="a', "" ,$String); //
     $String = str_ireplace("OR ´a´=´a", "" ,$String); //
     $String = str_ireplace("OR ´a´=´a", "" ,$String); //
     $String = str_ireplace("--", "" ,$String); //
     $String = str_ireplace("^", "" ,$String); //
     $String = str_ireplace("[", "" ,$String); //
     $String = str_ireplace("]", "" ,$String); //
     $String = str_ireplace("==", "" ,$String); //
     return $String;

 }


 //generar una contraseña de 10 cadenas

 function passGenerator($length = 10)
 {
     $pass = "";
     $longitudPass =$length;
     $cadena = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz1234567890";
     $longitudCadena=strlen($cadena);

     for ($i=1; $i <=$longitudPass; $i++) { 
           $pos = rand(0,$longitudCadena-1);
           $pass .= substr($cadena,$pos,1);
     }

     return $pass;

 }


 //Generar un Token
 function token()
 {
     $r1 = bin2hex(random_bytes(10));
     $r2 = bin2hex(random_bytes(10));
     $r3 = bin2hex(random_bytes(10));
     $r4 = bin2hex(random_bytes(10));
     $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
     return $token;
 }


 //FORMATO PARRA VALORES MONETARIOS
 function formatMoney($cantidad)
 {
     $cantidad = number_format($cantidad,2,SPD,SPM);
     return $cantidad;
 }













