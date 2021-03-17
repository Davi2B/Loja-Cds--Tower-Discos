<?php    
$servidor  = "localhost";
$username  = "root";
$password  = "root";
$database  = "prova";

$conection = mysqli_connect($servidor,$username,$password,$database);
 if(!$conection){
 	echo "Não conectado";
 }



?>