<?php

$dbhost ="localhost";
$dbuser = "";
$dbpass = "";
$dbname = "";
 
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if($con)
{
    die("No hay conexion " .mysqli_connect_error());
}

$nombre = $_POST["textusuario"];
$pass = $_POST["texpassword"];

$query = mysqli_query($con, "SELECT * FROM login WHERE usuario = '".$nombre."' AND password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header ("location: ../pagina/index.html")
    echo "bienvenido".$nombre;

}else if ($nr ==0) {
    echo "no ingreso, usuario no existe";
}

<?