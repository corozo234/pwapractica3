<?php
session_start();
$usuarios = [
    "fernanda" => "12345",
    "admin" => "admin123",
    "usuario" => "abc123"
];

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $clave) {
        $_SESSION["autenticado"] = true;
        $_SESSION["usuario"] = $usuario;
        header("Location: bienvenido.php");
        exit;
    } else {
        $error = "⚠️ Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="">
        <label>Usuario: <input type="text" name="usuario" required></label><br><br>
        <label>Contraseña: <input type="password" name="clave" required></label><br><br>
        <button type="submit">Entrar</button>
    </form>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>