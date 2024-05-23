<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">3.000.000,00</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur vero ipsum perferendis magni quia
            similique velit, dignissimos quas eum, esse fugit ad? Quos, perferendis dicta accusamus atque debitis
            porro laborum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat ipsam aliquid
            architecto laboriosam impedit provident pariatur doloribus sint, maiores voluptatum vero obcaecati rerum
            similique velit, dignissimos quas eum, esse fugit ad? Quos, perferendis dicta accusamus atque debitis
            porro laborum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat ipsam aliquid
            architecto laboriosam impedit provident pariatur doloribus sint, maiores voluptatum vero obcaecati rerum
            sapiente, aut hic non nihil accusamus ad?</p>
    </div>
</main>
<?php
incluirTemplate('footer');
?>