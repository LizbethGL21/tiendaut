<?php
try{
    $con = new PDO('msql:host=localhost;dbname=tiendaut',
    'root',
    '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo 'Conectado a la base de datos <br> <br>';
    /*
    **
    Esta parte busca todos los registros de la tabla y regresa solo los nombres 
    **

    $stmt = $con->prepare('SELECT nombre FROM usuario');
    $stmt->execute();

    while($datos = $stmt->fetch() ){
        echo 'Nombre: '. $dato[0] . '<br>';
    }
    */

//Regresa el registro dle usuario Juan
$user = 'Juan';
$pass = 'bbbb';
$nombre = 'Lebron James';
$correo = 'lebro@gmail';






//Regresa el registro dle usuario Juan
//$stmt = $con->prepare('SELECT nombre,correo FROM usuario WHERE usuario=usuario'); 
//$stmt->bindParam('usuario', $user, PDO::PARAM_STR);
//$stumt->excute();

//$stumt->excute(array(':usuario'=>$user));

while( $datos = $stmt->fetch() ){
    echo 'Nombre: '.$datos[0] . '<br>' .'Correo:' . $dato[1];

}


//insercion de registro
$stmt = $con->prepare('INSERT INTO usuario,contraseña, nombre, correo VALUES(:user, :pass, :nom, :mai)');

$row = $stmt->execute(array(':user'=>$user,':pass'=>$pass,':nom'=>$nombre,'mail'=>$correo));

if($rows ==1){
    echo 'Insercion correcta'
}*/

//Modificar un registro
$stmt = $con->prepara('UPDATE usuario  SET usuario=:user WHERE nombre=:nom');
$stmt = $stmt->excute(array(':user'=>$user,':nom'=>$nombre));

//Borrado de un registro
$stmt = $con->prepare('DELETE FROM  usuario  WHERE usuario=:user');
$rows = $stmt->excute(array(':user'=>$user,':nom'=>$nombre));


}
catch(PDOException $e){
    die('Errror conectando con la base de datos: '
    .$e->getMessage());
}

?>

