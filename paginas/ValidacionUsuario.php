<?php
session_start();
//require('../../configuraciones/basedatos.php');
$objeto = new BaseDatos();
$conexion = $objeto->conectar();

//estos son los name que estan dentro de login
$Usr = $_POST['usuario'];
$Pass = $_POST['pass'];
$ConsultaU = "SELECT * FROM usuarios WHERE NomUsr='$Usr' AND Contra='$Pass' ";
$resultado = $conexion->prepare($ConsultaU);
$resultado->execute();


if ($resultado->rowCount() >= 1) {
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $Usr;
    $mensajeT = 'Info'; 
    $mensaje = $Usr;
    $mensaje2 = $Pass;
    setcookie("mensajeT", $mensajeT, time()+3800, "/");
    setcookie("mensaje", $mensaje, time()+3800, "/");
    setcookie("mensaje2", $mensaje2, time()+3800, "/");
    echo '<script type="text/javascript"> alert("Bienvenido"); window.location.href="/inicio"; </script>'; //acceder al inicio
} else {
    $_SESSION["s_usuario"] = null;
    $data = null;
    echo '<script type="text/javascript"> alert("Registro Incorrecto"); window.location.href="../../login"; </script>';
}

print json_encode($data);
$conexion = null;
