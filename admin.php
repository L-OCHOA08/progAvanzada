<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>

    <header>
            <h1 class="header-title">Popolo Pizza</h1>
    </header>    

    <div class="titulo-admin">
        <h2>CONSULTA DE USUARIOS</h2>
    </div>

    <form method="POST" action="admin.php" >

    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" name="id" class="form-control" id="id">
    </div>

    <div class="form-group">
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
      <label for="correo">Correo </label>
      <input type="text" name="correo" class="form-control" id="correo">
    </div>

    <div class="form-group">
      <label for="contra">Contraseña </label>
      <input type="text" name="contra" class="form-control" id="contra">
    </div>

    <div class="botones">
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
      <a class="btn btn btn-danger" href="index.php" role="button">CERRAR SESIÓN</a>
    </div>

    </form>
    <?php
    if(isset($_POST['btn2']))
    {
      include("consulta.php");

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        if (empty($id) && empty($nombre) && empty($correo) && empty($contra)) {
            echo "Por favor, completa al menos un campo para realizar la consulta.";
        }
        else
        {  
            $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE ID = '$id' OR Nombre = '$nombre' OR Correo = '$correo' OR Contraseña = '$contra'");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "
              <table id='tabla-admin' width=\"50%\" border=\"1\">
                <tr>
                  <td><b><center>ID</center></b></td>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Correo</center></b></td>
                  <td><b><center>Contraseña</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['ID']."</td>
                  <td>".$consulta['Nombre']."</td>
                  <td>".$consulta['Correo']."</td>
                  <td>".$consulta['Contraseña']."</td>
                </tr>
              </table>
            ";
          }
        }

      include("cerrarcone.php");
    }
    ?>
    </body>
</html>