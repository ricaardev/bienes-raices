<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>21/05/2024</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facere ipsum velit, cum molestiae quas
            perferendis facilis soluta laudantium iure ducimus nostrum dolore aliquid. Perspiciatis, culpa quos.
            Ipsa, earum porro.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facere ipsum velit, cum
            molestiae quas perferendis facilis soluta laudantium iure ducimus nostrum dolore aliquid. Perspiciatis,
            culpa quos. Ipsa, earum porro.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facere ipsum
            velit, cum molestiae quas perferendis facilis soluta laudantium iure ducimus nostrum dolore aliquid.
            Perspiciatis, culpa quos. Ipsa, earum porro.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias voluptas sed labore. Consequatur
            perspiciatis numquam, beatae rem accusamus soluta porro distinctio iusto sunt esse cum minima odit
            corporis. Dicta, provident.</p>
    </div>
</main>
<?php
include 'includes/templates/footer.php';
?>