<?php
    $conexion = mysqli_connect("localhost", "root", "", "proyectoprueba");
    $consulta = "INSERT INTO `pedido`(`ID_pedido`, `pizzaNombre`, `cantidad`, `precioTotal`) VALUES ('[value-1]','$selector','$cantidad','$precioTotal')";
    $resultado = mysqli_query($conexion, $consulta);
        if ($resultado){
            include("cerrarcone.php");
            exit();
        }
        else{
            echo "Error en la compra";
        }
?>