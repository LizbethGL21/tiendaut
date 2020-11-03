<?php

class Conexion{
    var $conn;
    function connectar(){
        $conn=null;

        try{
            $con = new PDO('msql:host=localhost;dbname=registro',
            'root',
            '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //echo 'Conectado a la base de datos <br> <br>';
            

          }
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["usuario"], $_POST["contraseña"], $_POST["nombre"]), $_POST["correo"]) and $_POST["usuario"] !="" and $_POST["contraseña"]!="" and $_POST["nombre"]!="" and $_POST["correo"] !="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

//Preparamos la orden SQL
$consulta = "INSERT INTO registro
(Usuario,Contraseña,Nombre,Correo) VALUES ('$nombre','$contraseña','$nombre','$correo')";

//Aqui ejecutaremos esa orden

} else {

echo '<p>Por favor, complete el <a href="Registro.html">Registro</a></p>';
}

//aui va lo demas
if (mysql_query($consulta) ){
    echo "<p>Registro agregado.</p>";
    } else {
    echo "<p>No se agregó...</p>";
    }


?>