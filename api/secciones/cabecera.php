<?php
$menu = [
    ""            => "Inicio",
    "sobre-mi"    => "Sobre mí",
    "blog"        => "Blog",
    "academico"   => "Académico",
    "experiencia" => "Experiencia",
    "proyectos"   => "Proyectos",
    "contacto"    => "Contacto",
];
?>
<header class="cabecera">
    <div class="contenedor cabecera-fila">
        <a class="marca" href="/">
            <span class="marca-sello" aria-hidden="true">HT</span>
            <span class="marca-texto">
                <strong>Mi blog personal</strong>
                <small><?= e($perfil["nombre_corto"]) ?></small>
            </span>
        </a>
        <button class="boton-menu" type="button" aria-expanded="false" aria-controls="menu-principal">Menú</button>
        <nav class="menu" id="menu-principal" aria-label="Principal">
            <ul>
                <?php foreach ($menu as $url => $texto): ?>
                    <li>
                        <a href="/<?= e($url) ?>"<?= $activo === $url ? ' aria-current="page"' : "" ?>><?= e($texto) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <button class="boton-tema" type="button" aria-label="Cambiar entre tema claro y oscuro" title="Cambiar tema">
            <span class="icono-tema" aria-hidden="true"></span>
        </button>
    </div>
</header>
