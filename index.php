<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Registrarme</h1>
        <div class="alert">
            <?php
            if (isset($_POST['name'])) {
                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $password = $_REQUEST['passw'];
                $passwordC = $_REQUEST['passwC'];

                $campos = array();

                if ($name == "") {
                    array_push($campos, "Necesitas agregar tu nombre para continuar.");
                }

                if ($email == "" || strpos($email, "@") === false) {
                    array_push($campos, "Ingrese un email válido.");
                }

                if ($password == "" || strlen($password) < 6 || strpos($password, "@") === false) {
                    array_push($campos, 'Su contraseña debe tener al menos 6 carácteres y un signo especial. Ejemplo: "@".');
                }

                if ($passwordC == "" || $passwordC != $password) {
                    array_push($campos, "Sus contraseñas no coinciden.");
                }

                if (count($campos) > 0) {
                    echo "<div class='error' style='height: auto; background: #d90000; padding: .5rem; width: 80%; border-radius: 20px; text-align: center; margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:auto; margin-bottom: 1rem;'>";
                    for ($i = 0; $i < count($campos); $i++) {
                        echo "<li style='list-style: none; color: #fff';>" . $campos[$i];
                    }
                    echo "</div>";
                } else {
                    include("abrircone.php");
                }
            }

            ?>
        </div>
        <div class="input-form">
            <div class="input-content">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-content">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-content">
                <label for="passw">Contraseña</label>
                <input type="password" name="passw" id="passw">
            </div>

            <div class="input-content">
                <label for="passwC">Confirmar Contraseña</label>
                <input type="password" name="passwC" id="passwC">
            </div>
            <div class="consulta_login">
                <p class="consulta_login_p">¿Ya tenés un usuario? <a href="login.php" class="consulta_login_a">Iniciar Sesión</a></p>
            </div>
            <input class="button-form" type="submit">
        </div>
    </form>

    <style>

        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        * {
            margin: 0;
        }

        body {
            background: #222;
        }

        h1 {
            padding: 2rem;
            color: #fff;
        }

        form {
            background: #111;
            width: 35vw;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            margin-top: 15vh;
            border-radius: 30px;
        }

        .input-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            display: block;
            color: #fff;
        }

        input {
            margin: auto;
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            background: #333;
            color: #fff;
            width: 100%;
        }

        .button-form {
            display: block;
            margin-top: 1rem;
            background-color: #111;
            font-weight: 900;
            color: #fff;
            border: solid 1px #fff;
            text-transform: uppercase;
            margin-bottom: 2rem;
            width: 50%;
        }

        .consulta_login{
            margin-top: 1rem;
        }

        .consulta_login_p{
            color: #fff;
            font-size: 18px;
        }
        .consulta_login_a{
            color: #69c3ff;
            font-weight: 900;
            font-size: 18px;
            font-weight: 400;
        }
    </style>

</body>

</html>