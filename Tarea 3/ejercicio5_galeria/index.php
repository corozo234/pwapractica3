<?php
$imagenes = glob("imagenes/*.jpg");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Galería</title>
  <style>
    .galeria img { width: 150px; margin: 10px; border-radius: 8px; }
  </style>
</head>
<body>
  <h2>Galería de Imágenes</h2>
  <div class="galeria">
    <?php foreach ($imagenes as $img): ?>
      <img src="<?php echo $img; ?>" alt="Imagen">
    <?php endforeach; ?>
  </div>
</body>
</html>