<?php

spl_autoload_register(function($Class){
    //echo libs.'core/'.$class.".php";
      
   if (file_exists("Librerias/".'Core/'.$Class.".php")) {
       require_once("Librerias/".'Core/'.$Class.".php");
   }
});
