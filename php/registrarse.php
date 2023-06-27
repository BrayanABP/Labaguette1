<?php

include("conexion.php");
$conectar =conectar();
$tdoc=$_POST["tdoc"];
$ndocu=$_POST["ndocu"];
$nombre=$_POST["nombre"];
$fnaci=$_POST["fnaci"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$numcont=$_POST["numcont"];
$contra=md5($_POST["contra"]);

//verificar que el correo no se repita en la base de datos
$verificar=mysqli_query($conectar,"SELECT * FROM cliente WHERE correo='$correo'");
if(mysqli_num_rows($verificar) > 0){
    echo"
    <script>alert('Este correo ya esta registrado, intenta otro diferente'); window.location.href='registrarse.html'</script>";
    exit;
}
//verificar que el numero de documento que no se repita en la base de datos
$verificar_ndocu=mysqli_query($conectar,"SELECT * FROM cliente WHERE ndocu='$ndocu'");
if(mysqli_num_rows($verificar_ndocu) > 0){
    echo"
    <script>alert('Este numero de documento ya esta registrado, intenta otro diferente'); window.location.href='registrarse.html'</script>";
    exit;
}
try{
    $sentencia = "INSERT INTO cliente (tdoc,ndocu,nombre,fnaci,correo,direccion,numcont,contra) VALUES ('".$tdoc."','".$ndocu."','".$nombre."','".$fnaci."','".$correo."','".$direccion."','".$numcont."','".$contra."')";
    mysqli_query($conectar,$sentencia) or die ("NO SE LOGRA INSERTAR LOS DATOS".mysqli_error($conectar));
    $sql= mysqli_query($conectar,$sentencia);
    echo "<script>alert('Registro exitoso'); window.location.href='IniciarSesion.html'</script>";
    }
    catch(PDOException $e){
        echo "Error al insertar el registro:";
    }  
?>