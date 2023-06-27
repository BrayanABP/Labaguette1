<?php
include("conexion.php");
$conectar =conectar();
$nombre=$_POST["usuario"];

$validar=mysqli_query($conectar,"SELECT * FROM cliente WHERE nombre='$nombre''");
if(mysqli_num_rows($validar) > 0){
    echo"el usuario existe";
    exit;
}else{
    echo "<script>alert('Usuario no existe, por favor verifique los datos introducidos'); window.location.href='olvideContraseña.html'</script>";
}
exit;
?>