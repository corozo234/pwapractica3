<?php
session_start();
if (!isset($_SESSION["numero"])) {
  $_SESSION["numero"] = rand(1, 10);
}
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $intento = (int)$_POST["adivina"];
  if ($intento == $_SESSION["numero"]) {
    $mensaje = "¡Correcto! El número era " . $_SESSION["numero"];
    session_destroy();
  } else {
    $mensaje = "Incorrecto. Intenta de nuevo.";
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Juego de Adivinanza</title>
</head>
<body>
  <h2>Adivina el número (1 al 10)</h2>
  <form method="post">
    <input type="number" name="adivina" min="1" max="10" required>
    <button type="submit">Adivinar</button>
  </form>
  <p><?php echo $mensaje; ?></p>
</body>
</html>