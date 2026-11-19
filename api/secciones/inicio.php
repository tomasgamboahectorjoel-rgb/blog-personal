<?php include __DIR__ . "/_tarjeta.php"; ?>

<section class="hero">
    <div class="contenedor hero-fila">
        <div class="hero-texto">
            <p class="prompt"><span class="prompt-signo">&gt;</span> whoami</p>
            <h1><span class="degradado"><?= e($perfil["nombre"]) ?></span></h1>
            <p class="escribe">
                <span class="escribe-texto" data-escribir="<?= e(json_encode($perfil["frases"], JSON_UNESCAPED_UNICODE)) ?>"><?= e($perfil["frases"][0]) ?></span><span class="cursor" aria-hidden="true"></span>
            </p>
            <p class="lead"><?= e($perfil["frase"]) ?></p>
            <p>Estoy en el décimo ciclo de la Universidad Nacional del Santa. En este blog está todo lo que hace falta para conocerme: lo que estudio, lo que he hecho, cómo trabajo y cómo contactarme.</p>
            <div class="botones">
                <a class="boton boton-primario" href="/sobre-mi">Conóceme</a>
                <a class="boton" href="/proyectos">Ver proyectos</a>
                <a class="boton" href="/contacto">Contacto</a>
            </div>
        </div>

        <div class="hero-lado">
            <figure class="foto-anillo">
                <img src="<?= e($perfil["foto"]) ?>" alt="Retrato de <?= e($perfil["nombre_corto"]) ?>, con lentes y polo azul" width="400" height="400">
            </figure>
            <div class="terminal" role="img" aria-label="Resumen de perfil en formato JSON">
                <div class="terminal-barra" aria-hidden="true"><i></i><i></i><i></i><span>perfil.json</span></div>
<pre><code>{
  <span class="t-clave">"nombre"</span>: <span class="t-texto">"Héctor Joel Tomas Gamboa"</span>,
  <span class="t-clave">"universidad"</span>: <span class="t-texto">"UNS"</span>,
  <span class="t-clave">"carrera"</span>: <span class="t-texto">"Ing. de Sistemas e Informática"</span>,
  <span class="t-clave">"ciclo"</span>: <span class="t-num">10</span>,
  <span class="t-clave">"egreso"</span>: <span class="t-texto">"2026-12"</span>,
  <span class="t-clave">"pasantias"</span>: [<span class="t-texto">"La Laguna"</span>, <span class="t-texto">"Lima"</span>],
  <span class="t-clave">"busca"</span>: <span class="t-texto">"big data e IA"</span>
}</code></pre>
            </div>
        </div>
    </div>
</section>

<section class="bloque bloque-compacto">
    <div class="contenedor">
        <ul class="cifras">
            <?php foreach ($cifras as $c): ?>
                <li><strong><?= e($c["valor"]) ?></strong><span><?= e($c["texto"]) ?></span></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Qué vas a encontrar</p>
        <h2>Mi perfil completo, en cuatro partes</h2>
        <div class="rejilla rejilla-4">
            <a class="tarjeta tarjeta-area cat-personal" href="/sobre-mi">
                <span class="etiqueta">Personal</span>
                <h3>Sobre mí</h3>
                <p>Cómo me presento, cómo trabajo, qué me interesa y mi línea de vida desde 2022.</p>
            </a>
            <a class="tarjeta tarjeta-area cat-academico" href="/academico">
                <span class="etiqueta">Académico</span>
                <h3>La carrera</h3>
                <p>Datos de la UNS, cursos por tema y el plan de estudios completo.</p>
            </a>
            <a class="tarjeta tarjeta-area cat-profesional" href="/experiencia">
                <span class="etiqueta">Profesional</span>
                <h3>Experiencia</h3>
                <p>Prácticas, dos pasantías, un primer puesto, certificación y herramientas.</p>
            </a>
            <a class="tarjeta tarjeta-area" href="/proyectos">
                <span class="etiqueta">Hecho</span>
                <h3>Proyectos</h3>
                <p>Tesis con realidad aumentada, un agente de IA, automatizaciones y más.</p>
            </a>
        </div>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor">
        <div class="titulo-fila">
            <h2>Últimas entradas</h2>
            <a href="/blog">Ver todas</a>
        </div>
        <div class="rejilla rejilla-3">
            <?php foreach (array_slice($entradas, 0, 3) as $en) { tarjeta_entrada($en, $categorias); } ?>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="contenedor estrecho centrado">
        <h2>¿Buscas a alguien para big data o IA?</h2>
        <p class="lead">Estoy terminando la carrera y busco mi primera oportunidad en esa área.</p>
        <div class="botones centrado-botones">
            <a class="boton boton-primario" href="mailto:<?= e($perfil["correo"]) ?>">Escríbeme</a>
            <a class="boton" href="<?= e($perfil["linkedin"]) ?>" target="_blank" rel="noopener">LinkedIn</a>
        </div>
    </div>
</section>
