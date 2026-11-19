<?php
$gustos = [
    ["etiqueta" => "Deporte",     "titulo" => "El fútbol y el Barça",    "texto" => "Soy del Barcelona y lo sigo con más ganas en los últimos años. Mi jugador favorito es Lamine Yamal y mi mejor partido fue un 5-2 al Real Madrid. El fútbol lo veo más de lo que lo juego, aunque de vez en cuando armo un partido con mis amigos."],
    ["etiqueta" => "Videojuegos", "titulo" => "Pro Evolution Soccer",    "texto" => "Es mi videojuego favorito, así que el fútbol también me acompaña en la pantalla."],
    ["etiqueta" => "Cine",        "titulo" => "Películas con vueltas",   "texto" => "Me gustan las de Marvel, las que juegan con el tiempo, la ciencia ficción y todo lo surreal. Mi favorita es Avengers: La era de Ultron."],
    ["etiqueta" => "Series",      "titulo" => "The 8 Show",              "texto" => "Es mi serie favorita, de Netflix."],
    ["etiqueta" => "Música",      "titulo" => "Salsa, cumbia y más",     "texto" => "Escucho sobre todo salsa, cumbia y música peruana. También me gustan Juan Gabriel y Sebastián Yatra, y una de las canciones que más escucho es Tacones Rojos."],
    ["etiqueta" => "Comida",      "titulo" => "Ají de gallina",          "texto" => "Es mi plato favorito y ninguno le gana."],
    ["etiqueta" => "Mi ciudad",   "titulo" => "Mis planes en Chimbote",  "texto" => "Mi plan favorito es quedarme en casa. Después viene salir a comer con mi familia, y luego juntarme con mis amigos en un parque o una plaza."],
    ["etiqueta" => "Familia",     "titulo" => "Tiempo en familia",       "texto" => "Lo que más disfruto es estar con los míos. A veces viajamos juntos a otras ciudades, como Chiclayo y Trujillo."],
    ["etiqueta" => "De niño",     "titulo" => "Pastor por un rato",      "texto" => "De pequeño visité a mis tíos en la sierra y ellos me enseñaron a pastorear ovejas. Es una de esas experiencias que se quedan contigo."],
];
?>
<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Sobre mí</p>
        <h1>Quién soy</h1>

        <div class="presentacion">
            <aside class="ficha">
                <img class="ficha-foto" src="<?= e($perfil["foto"]) ?>" alt="Retrato de <?= e($perfil["nombre_corto"]) ?>" width="400" height="400">
                <dl class="ficha-datos">
                    <div><dt>Nombre</dt><dd><?= e($perfil["nombre"]) ?></dd></div>
                    <div><dt>Vivo en</dt><dd><?= e($perfil["ubicacion"]) ?></dd></div>
                    <div><dt>Mi equipo</dt><dd>FC Barcelona</dd></div>
                    <div><dt>Plato favorito</dt><dd>Ají de gallina</dd></div>
                    <div><dt>Videojuego</dt><dd>Pro Evolution Soccer</dd></div>
                    <div><dt>Estudio</dt><dd>Ing. de Sistemas e Informática, UNS</dd></div>
                </dl>
            </aside>

            <div class="presentacion-texto">
                <p class="lead"><?= e($perfil["frase"]) ?></p>
                <p>Hola, soy <?= e($perfil["nombre"]) ?>. Vivo en Chimbote y estudio Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa, en el último ciclo de la carrera.</p>
                <p>Fuera de clases, mi vida gira alrededor de mi familia, el fútbol y una buena película. Si me preguntas qué quiero comer, casi seguro te voy a decir ají de gallina.</p>
                <p>Si me preguntas cómo soy, te diría que responsable, atento a los detalles y con muchas ganas de aprender. Me siento cómodo trabajando en equipo y prefiero las cosas simples y bien hechas.</p>
                <p>Más abajo te cuento lo que me gusta. Si prefieres saber de mis estudios o de lo que he hecho, los encuentras en <a href="/academico">Académico</a> y en <a href="/experiencia">Experiencia</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor">
        <p class="sobretitulo cat-personal-texto">Mis gustos</p>
        <h2>Lo que me gusta fuera de la pantalla</h2>
        <div class="rejilla rejilla-3">
            <?php foreach ($gustos as $g): ?>
                <article class="tarjeta cat-personal">
                    <span class="etiqueta"><?= e($g["etiqueta"]) ?></span>
                    <h3><?= e($g["titulo"]) ?></h3>
                    <p><?= e($g["texto"]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="contenedor estrecho">
        <p class="sobretitulo cat-personal-texto">Un sueño</p>
        <h2>Viajar con toda mi familia</h2>
        <p class="lead">Mi sueño para el futuro es viajar a otro país con toda mi familia: mis padres, mi hermano y yo.</p>
        <p>Ya viajamos juntos a otras ciudades, como Chiclayo y Trujillo, y me encantaría que algún día el viaje cruce la frontera. Lo que más quiero de ese viaje es que vayamos todos.</p>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor estrecho">
        <p class="sobretitulo cat-personal-texto">En corto</p>
        <h2>Mis preferencias, resumidas</h2>
        <p>Si vas con prisa, aquí tienes todo junto, a mi manera.</p>
        <div class="terminal" role="img" aria-label="Resumen de mis preferencias en formato JSON">
            <div class="terminal-barra" aria-hidden="true"><i></i><i></i><i></i><span>preferencias.json</span></div>
<pre><code>{
  <span class="t-clave">"equipo"</span>: <span class="t-texto">"FC Barcelona"</span>,
  <span class="t-clave">"futbol"</span>: <span class="t-texto">"lo veo, y juego a veces con amigos"</span>,
  <span class="t-clave">"jugador"</span>: <span class="t-texto">"Lamine Yamal"</span>,
  <span class="t-clave">"videojuego"</span>: <span class="t-texto">"Pro Evolution Soccer"</span>,
  <span class="t-clave">"mejor_partido"</span>: <span class="t-texto">"Barça 5-2 Real Madrid"</span>,
  <span class="t-clave">"cine"</span>: [<span class="t-texto">"Marvel"</span>, <span class="t-texto">"el tiempo"</span>, <span class="t-texto">"ciencia ficción"</span>, <span class="t-texto">"lo surreal"</span>],
  <span class="t-clave">"pelicula"</span>: <span class="t-texto">"Avengers: La era de Ultron"</span>,
  <span class="t-clave">"serie"</span>: <span class="t-texto">"The 8 Show"</span>,
  <span class="t-clave">"musica"</span>: [<span class="t-texto">"salsa"</span>, <span class="t-texto">"cumbia"</span>, <span class="t-texto">"Juan Gabriel"</span>, <span class="t-texto">"Sebastián Yatra"</span>],
  <span class="t-clave">"plato"</span>: <span class="t-texto">"ají de gallina"</span>,
  <span class="t-clave">"plan_favorito"</span>: <span class="t-texto">"quedarme en casa"</span>,
  <span class="t-clave">"viajes"</span>: [<span class="t-texto">"Chiclayo"</span>, <span class="t-texto">"Trujillo"</span>],
  <span class="t-clave">"mejor_plan"</span>: <span class="t-texto">"tiempo en familia"</span>,
  <span class="t-clave">"sueno"</span>: <span class="t-texto">"viajar a otro país con mi familia"</span>
}</code></pre>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="contenedor estrecho centrado">
        <h2>¿Hablamos?</h2>
        <p class="lead">Si también eres del Barça, o tienes una película para recomendarme, escríbeme. Me encanta conversar.</p>
        <div class="botones centrado-botones">
            <a class="boton boton-primario" href="/contacto">Ir a contacto</a>
            <a class="boton" href="/blog?cat=personal">Leer mis entradas personales</a>
        </div>
    </div>
</section>
