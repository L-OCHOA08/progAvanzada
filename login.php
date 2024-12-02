<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&icon_names=error" />
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <h1>Iniciar Sesión</h1>
        <?php 
        if (isset($_REQUEST['userlog'])) {
            $userLog = $_REQUEST['userlog'];
            $passw = $_REQUEST['passw'];

            $campos = array();

            if (!$userLog && !$passw) {
                array_push($campos, 'Necesitas ingresar un email y una contraseña');
            } else if (!$userLog) {
                array_push($campos, 'Necesitas agregar un correo');
            }else if (!$passw) {
                array_push($campos, 'Necesitas ingresar una contraseña.');
            }
            
            if (count($campos) > 0) {
                echo "<div class='error' style='height: auto; background: #d90000; padding: .5rem; width: 50%; border-radius: 20px; text-align: center; margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:auto; margin-bottom: 1rem;'>";
                for ($i = 0; $i < count($campos); $i++) {
                    echo "<li style='list-style: none; color: #fff';>" . $campos[$i];
                }
                echo "</div>";
            }
        }
    ?>
            <form action="validar.php" method="post">
            <div class="input-cont">
                <label for="userlog">Correo electrónico:</label>
                <input type="text" name="userlog" id="userlog" require>
            </div>
            <div class="input-cont">
                <label for="passw">Contraseña:</label>
                <input type="password" name="passw" id="passw" require>
            </div>

            <button type="submit">Iniciar Sesion</button>
        </form>
    </div>
</body>

</html>