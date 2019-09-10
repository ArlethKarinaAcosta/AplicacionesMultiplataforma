<?php
session_start();

$usuario=$_POST['user'];
$clave=$_POST['pass'];


//Conectar a la base de datos.
$conexion=mysqli_connect("localhost", "root", "", "prueba"); //servidor, usuario, clave, nombrebd
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'"; //Consulta a la bd.

$resultado=mysqli_query($conexion, $consulta); //primer parametro es la conexion, y el segundo la consulta.

$filas=mysqli_num_rows($resultado); //Coincidencia = 1, no coincidencia = 2.
if ($filas >0)
{
    header("location:panel.php");
}
else
{
    echo "Error de autenticación ¡Ingresa los datos correctos!";
}
mysqli_free_result($resultado);

$_SESSION['usuario'] = $usuario;
header("Location.panel.php");
mysqli_close($conexion);


