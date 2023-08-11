<?php
session_start();

include("conexion.php");
$conectar = conectar();

$tdoc = $_POST["tdoc"];
$numb = $_POST["numb"];
$contra = $_POST["contra"];

// Utilizar consulta preparada para evitar inyección de SQL
$stmt = $conectar->prepare("SELECT role_id FROM clientes WHERE ndocu = ? AND tdoc = ? AND contra = ?");
$stmt->bind_param("sss", $numb, $tdoc, $contra);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rol = $row['role_id'];

    // Redirigir al usuario a la página correspondiente según su rol
    if ($rol == 2) {
        $_SESSION['role'] = 'Administrador';
        $_SESSION['numb'] = $numb;
        header("Location: ..\back-end\index.php");
        exit;
    } elseif ($rol == 1) {
        $_SESSION['role'] = 'Cliente';
        $_SESSION['numb'] = $numb;
        header("Location: iniciado.php");
        exit;
    } else {
        echo "<script>alert('Rol de usuario desconocido'); window.location.href='/baguette/IniciarSesion.html'</script>";
    }
} else {
    echo "<script>alert('Usuario no existe o datos incorrectos'); window.location.href='/baguette/IniciarSesion.html'</script>";
}
?>

