<?php
include __DIR__ . "/_tarjeta.php";

$relacionadas = array_values(array_filter(
    $entradas,
    fn($en) => $en["categoria"] === $entrada["categoria"] && $en["slug"] !== $entrada["slug"]
));
?>
<article class="bloque">
    <div class="contenedor estrecho">
        <p class="migas"><a href="/blog">Blog</a> / <a href="/blog?cat=<?= e($entrada["categoria"]) ?>"><?= e($categorias[$entrada["categoria"]]) ?></a></p>
        <span class="etiqueta cat-<?= e($entrada["categoria"]) ?>"><?= e($categorias[$entrada["categoria"]]) ?></span>
        <h1><?= e($entrada["titulo"]) ?></h1>
        <p class="meta">Por <?= e($perfil["nombre_corto"]) ?> &middot; <?= e(fecha_es($entrada["fecha"])) ?> &middot; <?= minutos_lectura($entrada) ?> min de lectura</p>

        <div class="cuerpo-entrada">
            <?php foreach ($entrada["cuerpo"] as $parrafo): ?>
                <p><?= e($parrafo) ?></p>
            <?php endforeach; ?>
        </div>

        <p class="aparte"><a href="/blog">&larr; Volver al blog</a></p>
    </div>
</article>

<?php if ($relacionadas): ?>
<section class="bloque bloque-suave">
    <div class="contenedor">
        <h2>Más en <?= e($categorias[$entrada["categoria"]]) ?></h2>
        <div class="rejilla rejilla-3">
            <?php foreach (array_slice($relacionadas, 0, 3) as $en) { tarjeta_entrada($en, $categorias); } ?>
        </div>
    </div>
</section>
<?php endif; ?>
