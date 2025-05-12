<?php
// Arreglo de productos
$productos = array(
    array(
        "id" => 1,
        "nombre" => "Audífonos Bluetooth",
        "descripcion" => "Audífonos inalámbricos con cancelación de ruido.",
        "precio" => 25.99,
        "imagen" => "img/producto1.jpg"
    ),
    array(
        "id" => 2,
        "nombre" => "Smartwatch",
        "descripcion" => "Reloj inteligente con monitor de salud.",
        "precio" => 49.99,
        "imagen" => "img/producto2.jpg"
    ),
    array(
        "id" => 3,
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado con retroiluminación RGB.",
        "precio" => 39.50,
        "imagen" => "img/producto3.jpg"
    )
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Productos</h1>

    <div class="productos">
        <?php foreach($productos as $producto) { ?>
            <div class="producto">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p><?php echo $producto['descripcion']; ?></p>
                <span class="precio">$<?php echo number_format($producto['precio'], 2); ?></span>
                <button onclick='agregarAlCarrito("<?php echo addslashes($producto["nombre"]); ?>")'>Agregar al carrito</button>

        <?php } ?>
    </div>

    <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
    </div>

    <script>
        function agregarAlCarrito(nombre) {
            const lista = document.getElementById('lista-carrito');
            const item = document.createElement('li');
            item.textContent = nombre;
            lista.appendChild(item);
        }
    </script>
</body>
</html>
