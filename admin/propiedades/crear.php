<?php

//Base de datos

require '../../includes/config/database.php';

$db = conectarBD();

//Arreglo con mensajes de errores

$errores = [];

$titulo = $_POST[''];
$precio = $_POST[''];
$descripcion = $_POST[''];
$habitaciones = $_POST[''];
$wc = $_POST[''];
$estacionamiento = $_POST[''];
$vendedorId = $_POST[''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!$titulo) {
        $errores[] = 'Debes añadir un título';
    }

    if (!$precio) {
        $errores[] = 'El precio es obligatorio';
    }

    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripción es obligatoria y debe tener almenos 50 caracteres';
    }
    if (!$habitaciones) {
        $errores[] = 'El número de habitaciones es obligatorio';
    }

    if (!$wc) {
        $errores[] = 'El número de wc es obligatorio';
    }
    if (!$estacionamiento) {
        $errores[] = 'El número de estacionamiento es obligatorio';
    }

    if (!$vendedorId) {
        $errores[] = 'Elige un vendedor';
    }

    // echo '<pre>';
    // var_dump($errores);
    // echo '</pre>';


    //REvisar que el arry de errores esté vacio

    if (empty($errores)) {
        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId') ";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            echo "Insertado Correctamente";
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" action="/admin/propiedades/crear.php" class="formulario">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Prpiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedorId">
                <option value="">-- Selecciones --></option>
                <option value="1">Juan</option>
                <option value="2">Karem</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>