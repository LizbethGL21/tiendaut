<?php

include('Conexion.php');
$obj = new Conexion;

$usuario =$_POST['inputUser'];
$usuario =$_POST['inputpass'];
$usuario =$_POST['inputnombre'];
$pass = $_POST['inputcorreo'];

//$texto = "Nombre: ".$usuario."Contraseña".$pass;
//$dato = array('datos' =>$tex);

$res = $obj->buscarUsario($usuario, $pass);

if($res == 1){
    $dato=array('dato' => 'ok');
}else{

    $dato=array('dato' => 'no');
}


echo json_encode($datos, JSON_FORCE_OBJECT);



?>