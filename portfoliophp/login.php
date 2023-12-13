<?php
session_start(); // Iniciar la sesión al principio del script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado datos del formulario
    if (isset($_POST["email"]) && isset($_POST["pass"])) {
        $servidor = "localhost";
        $usuario = "userportfolio";
        $contraseña = "portfolio";
        $BD = "userportfolio";

        $conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

        // Verificar la conexión a la base de datos
        if ($conexion->connect_error) {
            die("No pudo conectarse: " . $conexion->connect_error);
        }

        $email = $_POST["email"];
        $pass = $_POST["pass"];

        // Verificar si el correo electrónico ya está registrado
        $verificarEmailSQL = "SELECT * FROM usuarios WHERE email='$email'";
        $resultadoVerificacion = $conexion->query($verificarEmailSQL);

        if ($resultadoVerificacion->num_rows > 0) {
            echo "El correo electrónico ya está registrado.";
        } else {
            // El correo electrónico no está registrado, proceder con el registro
            $insertarUsuarioSQL = "INSERT INTO usuarios (email, contrasena) VALUES ('$email', '$pass')";

            if ($conexion->query($insertarUsuarioSQL) === TRUE) {
                echo "Registro exitoso. Ahora puedes iniciar sesión.";
            } else {
                echo "Error al registrar el usuario: " . $conexion->error;
            }
        }

        $conexion->close();
    } else {
        echo "Por favor, complete el formulario de registro.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background: url('https://i.redd.it/ev0qkpih9jbb1.gif') center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.6);
            /* Color y opacidad de la superposición */
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            /* Fondo blanco semitransparente */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 300px;
            text-align: center;
            position: relative;
            z-index: 1;
            /* Asegura que el contenido del contenedor esté sobre la superposición */
        }

        h2 {
            color: #333;
            /* Color del texto */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #555;
            /* Color del texto del label */
            font-size: 14px;
            text-align: left;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            /* Elimina el resplandor del borde en el foco */
        }

        input[type="submit"] {
            background-color: #3498db;
            /* Color de fondo del botón */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-size: 12px;
            display: block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Registro</h2>
        <form action="llamada.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" required>
            <br>
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>

</html>