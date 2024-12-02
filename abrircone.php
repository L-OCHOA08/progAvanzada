<?php
    $conexion = mysqli_connect("localhost", "root", "", "proyectoprueba");
    $consulta = "INSERT INTO `usuario`(`ID`, `Nombre`, `Correo`, `Contraseña`) VALUES ('[value-1]','$name','$email','$password')";
    $resultado = mysqli_query($conexion, $consulta);
        if ($resultado){
            include("cerrarcone.php");
            header("Location: inicio.html");
            exit();
        }
        else{
            echo "Error al registrar";
        }
?>