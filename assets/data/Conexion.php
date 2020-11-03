<?php
class Conexion{
    var $conn;
    function connectar(){
        $conn=null;

        try{
            $con = new PDO('msql:host=localhost;dbname=tiendaut',
            'root',
            '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //echo 'Conectado a la base de datos <br> <br>';
            

          }
          catch(PDOException $e){
            die('Errror conectando con la base de datos: '
              .$e->getMessage());
     }
return $conn;
   }
   function buscarUsuario($user, $pass){
       $con = $this->conectar();

       $stmt = $con->prepare'SELECT nombre FROM usuario WHERE usuario=:usuario AND 
       contraseña=:pass';

$stmt->prepare($consulta);
$stumt->excute(array('usuario'=>$user,':pass'=>$pass));

$registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
$numRegistros = count($registro);

return $numRegistros;

/* $stmt = $con->prepare'SELECT nombre FROM usuario WHERE usuario=:usuario AND 
       contraseña=:pass';

$stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
$stumt->excute();

$registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
$numRegistros = count($registro);

return $numRegistros; */
       
   }
}



?>