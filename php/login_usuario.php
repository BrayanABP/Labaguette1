<?php
session_start();

include("conexion.php");
$conectar =conectar();

$tdoc=$_POST["tdoc"];
$numb=$_POST["numb"];
$contra=md5($_POST["contra"]);

$validar=mysqli_query($conectar,"SELECT * FROM cliente WHERE ndocu='$numb' and tdoc='$tdoc'");
if(mysqli_num_rows($validar) > 0){
    $_SESSION['cliente']= $numb;
    echo "<script>alert('Ingreso exitoso'); window.location.href='iniciado.php'</script>";
    exit;
}else{
    echo "<script>alert('Usuario no existe, por favor verifique los datos introducidos'); window.location.href='IniciarSesion.html'</script>";
}
exit;
?>