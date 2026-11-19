<?php include __DIR__ . "/_tarjeta.php"; ?>

<section class="bloque">
    <div class="contenedor estrecho">
        <p class="sobretitulo cat-profesional-texto">Experiencia</p>
        <h1>Experiencia y logros</h1>
        <p class="lead">Aquí te cuento por dónde he pasado: prácticas como programador, dos pasantías y un primer puesto en un concurso de emprendimiento.</p>

        <ol class="linea-tiempo">
            <li>
                <h3>Practicante programador en Neuracode S.A.C.</h3>
                <p class="meta">De marzo a julio, cerca de cuatro meses &middot; Área de desarrollo</p>
                <p>Neuracode dicta cursos de capacitación en tecnología y desarrolla sistemas a medida para empresas. Mi trabajo era programar, y lo más importante que salió de ahí fue un agente de IA para WhatsApp. Me encargué del backend, en .NET con arquitectura limpia.</p>
            </li>
            <li>
                <h3>Pasantía en la Universidad de Lima</h3>
                <p class="meta">28 de septiembre al 23 de octubre de 2026</p>
                <p>Trabajé con otros tres estudiantes en una plataforma de clasificación inteligente de incidencias de TI. También hubo un taller guiado de IoT.</p>
            </li>
            <li>
                <h3>Pasantía internacional en la Universidad de La Laguna, España</h3>
                <p class="meta">Finales de septiembre y octubre de 2025</p>
                <p>Mi primera pasantía, y la única fuera del país.</p>
            </li>
            <li>
                <h3>Protecrick</h3>
                <p class="meta">Exintegrante del área de TI</p>
            </li>
        </ol>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor estrecho">
        <p class="sobretitulo">Reconocimientos</p>
        <h2>Reconocimientos y certificaciones</h2>
        <ul class="lista-simple lista-destacada">
            <li><strong>Primer puesto</strong> en el programa Impact Startup Competition (ISC).</li>
            <li><strong>Scrum Fundamentals Certified</strong>, cuarta edición, en español.</li>
            <li><strong>Certificado de pasantía</strong> en inteligencia artificial, bases de datos y tecnologías web.</li>
            <li><strong>Pasantía internacional</strong> en la Universidad de La Laguna, España.</li>
        </ul>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Herramientas</p>
        <h2>Con qué trabajo</h2>
        <div class="rejilla rejilla-3">
            <?php foreach ($herramientas as $grupo => $items): ?>
                <article class="tarjeta">
                    <h3><?= e($grupo) ?></h3>
                    <ul class="chips">
                        <?php foreach ($items as $item): ?>
                            <li><?= e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="nota">Mi código está en <a href="<?= e($perfil["github"]) ?>" target="_blank" rel="noopener">GitHub</a>.</p>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor estrecho">
        <p class="sobretitulo">Siguiente paso</p>
        <h2>Hacia dónde voy</h2>
        <p>Quiero trabajar en big data e inteligencia artificial. Si conoces una oportunidad en ese campo, escríbeme desde la página de <a href="/contacto">contacto</a> o por <a href="<?= e($perfil["linkedin"]) ?>" target="_blank" rel="noopener">LinkedIn</a> y conversamos.</p>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <div class="titulo-fila">
            <h2>Entradas profesionales</h2>
            <a href="/blog?cat=profesional">Ver todas</a>
        </div>
        <div class="rejilla rejilla-2">
            <?php foreach ($entradas as $en) { if ($en["categoria"] === "profesional") { tarjeta_entrada($en, $categorias); } } ?>
        </div>
    </div>
</section>
