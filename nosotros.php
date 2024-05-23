<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>
    <div class="contenedor contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, totam accusantium fuga sapiente id
                aliquam placeat ipsum, delectus aspernatur exercitationem nihil laudantium distinctio repudiandae
                voluptatem eaque! Nihil non quaerat rerum! Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Hic, dignissimos voluptatibus culpa quidem cum necessitatibus omnis similique aperiam recusandae qui
                nulla fugiat laboriosam deleniti quisquam quae facilis consequuntur architecto repudiandae?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident blanditiis, nam aliquid ad
                possimus praesentium enim error sint laudantium, incidunt reprehenderit sit nobis eaque sequi porro
                eveniet nostrum, quis quo.</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae, repudiandae similique!
                Ad labore reprehenderit suscipit maxime! Provident.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono PRecio" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae, repudiandae similique!
                Ad labore reprehenderit suscipit maxime! Provident.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci recusandae, repudiandae similique!
                Ad labore reprehenderit suscipit maxime! Provident.</p>
        </div>
    </div>
</section>
<?php
include 'includes/templates/footer.php';
?>