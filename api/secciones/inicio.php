<?php include __DIR__ . "/_tarjeta.php"; ?>

<section class="hero">
    <div class="contenedor hero-fila">
        <div class="hero-texto">
            <p class="prompt"><span class="prompt-signo">&gt;</span> whoami</p>
            <h1><span class="degradado"><?= e($perfil["nombre"]) ?></span></h1>
            <p class="escribe">
                <span class="escribe-texto" data-escribir="<?= e(json_encode($perfil["frases"], JSON_UNESCAPED_UNICODE)) ?>"><?= e($perfil["frases"][0]) ?></span><span class="cursor" aria-hidden="true"></span>
            </p>
            <p>Te doy la bienvenida a mi rincón de internet. Aquí vas a encontrar quién soy, qué me gusta y cómo pienso, y también lo que estudio y lo que he hecho.</p>
            <div class="botones">
                <a class="boton boton-primario" href="/sobre-mi">Conóceme</a>
                <a class="boton" href="/blog">Leer mi blog</a>
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
  <span class="t-clave">"vive_en"</span>: <span class="t-texto">"Chimbote"</span>,
  <span class="t-clave">"equipo"</span>: <span class="t-texto">"FC Barcelona"</span>,
  <span class="t-clave">"plato"</span>: <span class="t-texto">"ají de gallina"</span>,
  <span class="t-clave">"videojuego"</span>: <span class="t-texto">"Pro Evolution Soccer"</span>,
  <span class="t-clave">"estudia"</span>: <span class="t-texto">"Ing. de Sistemas, UNS"</span>,
  <span class="t-clave">"busca"</span>: <span class="t-texto">"big data e IA"</span>
}</code></pre>
            </div>
        </div>
    </div>
</section>

<section class="bloque bloque-compacto">
    <div class="contenedor">
        <ul class="cifras cifras-texto">
            <?php foreach ($cifras as $c): ?>
                <li><strong><?= e($c["valor"]) ?></strong><span><?= e($c["texto"]) ?></span></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Qué vas a encontrar</p>
        <h2>Conóceme por partes</h2>
        <div class="rejilla rejilla-4">
            <a class="tarjeta tarjeta-area cat-personal" href="/sobre-mi">
                <span class="etiqueta">Personal</span>
                <h3>Sobre mí</h3>
                <p>Mis gustos, mi familia, el Barça y lo que disfruto fuera de clases.</p>
            </a>
            <a class="tarjeta tarjeta-area cat-personal" href="/blog?cat=personal">
                <span class="etiqueta">Personal</span>
                <h3>Mi blog</h3>
                <p>Cosas que me pasan, que veo y que quiero contarte.</p>
            </a>
            <a class="tarjeta tarjeta-area cat-academico" href="/academico">
                <span class="etiqueta">Académico</span>
                <h3>La carrera</h3>
                <p>Mi paso por la UNS, cómo trabajo y el plan de estudios completo.</p>
            </a>
            <a class="tarjeta tarjeta-area cat-profesional" href="/experiencia">
                <span class="etiqueta">Profesional</span>
                <h3>Experiencia</h3>
                <p>Mis prácticas, mis pasantías y las herramientas que uso.</p>
            </a>
        </div>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor">
        <div class="titulo-fila">
            <h2>Lo último que he escrito</h2>
            <a href="/blog?cat=personal">Ver todas</a>
        </div>
        <div class="rejilla rejilla-3">
            <?php $personales = array_values(array_filter($entradas, fn($x) => $x["categoria"] === "personal")); ?>
            <?php foreach (array_slice($personales, 0, 3) as $en) { tarjeta_entrada($en, $categorias); } ?>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="contenedor estrecho centrado">
        <h2>¿Conversamos?</h2>
        <p class="lead">Si quieres hablar de fútbol, de cine o de datos e IA, escríbeme. Y si buscas a alguien para big data o IA, también te leo con gusto: estoy por terminar la carrera y busco mi primera oportunidad.</p>
        <div class="botones centrado-botones">
            <a class="boton boton-primario" href="mailto:<?= e($perfil["correo"]) ?>">Escríbeme</a>
            <a class="boton" href="<?= e($perfil["linkedin"]) ?>" target="_blank" rel="noopener">LinkedIn</a>
        </div>
    </div>
</section>
