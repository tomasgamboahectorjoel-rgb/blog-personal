<?php
include __DIR__ . "/_tarjeta.php";

$cat = $_GET["cat"] ?? "";
if (!isset($categorias[$cat])) {
    $cat = "";
}
$lista = array_values(array_filter($entradas, fn($en) => $cat === "" || $en["categoria"] === $cat));
?>
<section class="bloque">
    <div class="contenedor">
        <h1>Blog</h1>
        <p class="lead">Entradas sobre la carrera, el trabajo y la casa.</p>

        <nav class="filtros" aria-label="Filtrar por categoría">
            <a href="/blog"<?= $cat === "" ? ' aria-current="true"' : "" ?>>Todas</a>
            <?php foreach ($categorias as $clave => $nombre): ?>
                <a href="/blog?cat=<?= e($clave) ?>"<?= $cat === $clave ? ' aria-current="true"' : "" ?>><?= e($nombre) ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="rejilla rejilla-3">
            <?php foreach ($lista as $en) { tarjeta_entrada($en, $categorias); } ?>
        </div>
        <?php if (!$lista): ?>
            <p>Todavía no hay entradas en esta categoría.</p>
        <?php endif; ?>
    </div>
</section>
