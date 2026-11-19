<?php
/*****
Tarjeta de entrada reutilizable (inicio, blog y experiencia).
*****/

if (!function_exists("tarjeta_entrada")) {
    function tarjeta_entrada(array $en, array $categorias): void
    {
        ?>
        <article class="tarjeta tarjeta-entrada cat-<?= e($en["categoria"]) ?>">
            <span class="etiqueta"><?= e($categorias[$en["categoria"]]) ?></span>
            <h3><a href="/blog/<?= e($en["slug"]) ?>"><?= e($en["titulo"]) ?></a></h3>
            <p class="meta"><?= e(fecha_es($en["fecha"])) ?> &middot; <?= minutos_lectura($en) ?> min de lectura</p>
            <p><?= e($en["resumen"]) ?></p>
        </article>
        <?php
    }
}
?>
