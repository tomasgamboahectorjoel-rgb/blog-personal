<?php
include __DIR__ . "/_tarjeta.php";

$linea = [
    ["fecha" => "Marzo de 2022", "titulo" => "Entré a la UNS", "texto" => "Empecé Ingeniería de Sistemas e Informática desde el primer ciclo. Ese primer año fue semipresencial por el covid."],
    ["fecha" => "Septiembre y octubre de 2025", "titulo" => "Pasantía internacional en España", "texto" => "Hice una pasantía en la Universidad de La Laguna."],
    ["fecha" => "De marzo a julio de 2026", "titulo" => "Prácticas en Neuracode", "texto" => "Entré como practicante programador al área de desarrollo y ahí desarrollé un agente de IA."],
    ["fecha" => "28 de septiembre al 23 de octubre de 2026", "titulo" => "Pasantía en la Universidad de Lima", "texto" => "Con un grupo de cuatro estudiantes trabajé en una plataforma de clasificación de incidencias de TI y en un taller de IoT."],
    ["fecha" => "Segundo semestre de 2026", "titulo" => "Décimo ciclo y Tesis II", "texto" => "Voy en el último ciclo y con la tesis de realidad aumentada en marcha."],
    ["fecha" => "Diciembre de 2026", "titulo" => "Egreso previsto", "texto" => "Termino la carrera y empiezo a buscar trabajo en big data e IA."],
];

$reglas = [
    ["titulo" => "Digo lo que pasó", "texto" => "Si mi cálculo dice una cosa y el sistema muestra otra, me quedo con lo que muestra el sistema."],
    ["titulo" => "Un paso a la vez", "texto" => "Termino una parte, la compruebo con capturas y recién sigo con la siguiente."],
    ["titulo" => "Empiezo por lo simple", "texto" => "Si una solución complicada me da problemas, vuelvo a una más sencilla."],
];

$intereses = [
    ["titulo" => "Agentes e IA", "texto" => "Llegué por el electivo de Agentes Inteligentes y terminé construyendo uno."],
    ["titulo" => "Ciencia de datos y big data", "texto" => "Es el área donde quiero trabajar cuando termine la carrera."],
    ["titulo" => "Algoritmos evolutivos", "texto" => "Me gusta cómo la evolución sirve para razonar y resolver problemas."],
    ["titulo" => "Realidad aumentada en medicina", "texto" => "Es el tema de mi tesis: que estudiantes de Medicina puedan estudiar el hígado en 3D."],
    ["titulo" => "Automatización", "texto" => "Reservas y ventas por WhatsApp con ManyChat y Make, y n8n como siguiente paso."],
    ["titulo" => "Ciberseguridad y forense", "texto" => "Lo he trabajado en laboratorios con Kali Linux, Autopsy y Wireshark."],
];
?>

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
        <p class="sobretitulo">Mi recorrido</p>
        <h2>Cómo llegué hasta aquí</h2>
        <ol class="linea-tiempo">
            <?php foreach ($linea as $hito): ?>
                <li>
                    <p class="meta"><?= e($hito["fecha"]) ?></p>
                    <h3><?= e($hito["titulo"]) ?></h3>
                    <p><?= e($hito["texto"]) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Cómo trabajo</p>
        <h2>Mis tres reglas</h2>
        <div class="rejilla rejilla-3">
            <?php foreach ($reglas as $i => $r): ?>
                <article class="tarjeta">
                    <span class="numero"><?= sprintf("%02d", $i + 1) ?></span>
                    <h3><?= e($r["titulo"]) ?></h3>
                    <p><?= e($r["texto"]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor">
        <p class="sobretitulo">Intereses</p>
        <h2>Lo que me mueve</h2>
        <div class="rejilla rejilla-3">
            <?php foreach ($intereses as $it): ?>
                <article class="tarjeta">
                    <h3><?= e($it["titulo"]) ?></h3>
                    <p><?= e($it["texto"]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bloque">
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

<section class="bloque bloque-suave">
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
