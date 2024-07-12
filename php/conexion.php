<?php
/* las variables se declaran con $*/

$user="root";
$pass="";
$server="localhost";
$bd="aca";


$mysqli= new mysqli($server,$user,$pass,$bd);

if($mysqli-> connect_error){
    echo "lo siento no hubo conexion a la base de datos";
}
else{
    /* los mensajes se generan con echo */
    echo "Bienvenido";
    $Nombre= $_POST["Nombre"];
    $Apellido= $_POST["Apellido"];
    $Email= $_POST["Email"];
    $Direccion= $_POST["Direccion"];
    $Telefono= $_POST["Telefono"];


    $sql="INSERT INTO clientes values ('".$Nombre."','".$Apellido."','".$Email."','".$Direccion."','".$Telefono."')";

    $mysqli->query($sql);
    echo "Los datos fueron guardados";






}



$mysqli->close();


?>