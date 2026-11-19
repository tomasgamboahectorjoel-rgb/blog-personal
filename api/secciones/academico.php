<?php include __DIR__ . "/_tarjeta.php"; ?>

<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo cat-academico-texto">Académico</p>
        <h1>La carrera en la UNS</h1>
        <p class="lead">Estudio Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa. Entré en 2022 y termino en diciembre de 2026.</p>

        <h2>Datos de la carrera</h2>
        <dl class="lista-datos">
            <?php foreach ($carrera as $clave => $valor): ?>
                <div><dt><?= e($clave) ?></dt><dd><?= e($valor) ?></dd></div>
            <?php endforeach; ?>
        </dl>
        <p class="nota">La UNS cuenta con licencia institucional de la Sunedu
            (<a href="https://andina.pe/ingles/noticia-sunedu-otorga-licencia-institucional-a-universidad-nacional-del-santa-745090.aspx" target="_blank" rel="noopener">nota de Andina</a>).</p>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor">
        <h2>Cursos por tema</h2>
        <p>Te dejo los cursos del plan agrupados por tema, para que veas rápido qué se estudia en cada área. El número entre paréntesis es el ciclo en que se llevan.</p>
        <div class="rejilla rejilla-3">
            <?php foreach ($grupos as $nombre => $cursos): ?>
                <article class="tarjeta">
                    <h3><?= e($nombre) ?></h3>
                    <ul class="lista-simple">
                        <?php foreach ($cursos as $curso): ?>
                            <li><?= e($curso) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="contenedor estrecho">
        <h2>Lo que más destaco</h2>
        <p>Algoritmos es uno de mis cursos favoritos y también mi mejor nota técnica, con 19 de promedio. Mis electivos fueron Agentes Inteligentes y Algoritmos Evolutivos y de Aprendizaje, y los elegí por interés. Los dos están en la línea de Inteligencia Artificial y Robótica del plan.</p>
        <p>No hice intercambios ni cursos en otras universidades, pero sí dos pasantías: en la Universidad de La Laguna (España, 2025) y en la Universidad de Lima (2026).</p>
        <p>Mi certificación es Scrum Fundamentals Certified, cuarta edición, en español. En inglés estoy en nivel elemental.</p>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor estrecho">
        <h2>Plan de estudios completo</h2>
        <p>Este es el plan completo, del Currículo 2018 de la Escuela Profesional de Ingeniería de Sistemas e Informática (Resolución N.° 509-2018-CU-R-UNS). Abre cada ciclo para ver sus cursos.</p>
        <div class="acordeon">
            <?php foreach ($plan as $ciclo => $cursos): ?>
                <details<?= $ciclo === "X" ? " open" : "" ?>>
                    <summary>Ciclo <?= e($ciclo) ?><?= $ciclo === "X" ? " (el que estoy cursando)" : "" ?></summary>
                    <ul class="lista-simple">
                        <?php foreach ($cursos as $curso): ?>
                            <li><?= e($curso) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
            <?php endforeach; ?>
        </div>
        <p class="nota">Fuente:
            <a href="https://www.uns.edu.pe/transparencia/recursos/509-2018-CU-R-UNS-2018.pdf" target="_blank" rel="noopener">Resolución N.° 509-2018-CU-R-UNS, Universidad Nacional del Santa</a>.</p>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <div class="titulo-fila">
            <h2>Entradas académicas</h2>
            <a href="/blog?cat=academico">Ver todas</a>
        </div>
        <div class="rejilla rejilla-2">
            <?php foreach ($entradas as $en) { if ($en["categoria"] === "academico") { tarjeta_entrada($en, $categorias); } } ?>
        </div>
    </div>
</section>
