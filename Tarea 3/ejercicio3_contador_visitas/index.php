<?php
$archivo = "contador.txt";
if (!file_exists($archivo)) {
  file_put_contents($archivo, 0);
}
$visitas = (int) file_get_contents($archivo);
$visitas++;
file_put_contents($archivo, $visitas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contador de Visitas</title>
</head>
<body>
  <h2>Contador de Visitas</h2>
  <p>Esta página ha sido visitada <?php echo $visitas; ?> veces.</p>
</body>
</html>