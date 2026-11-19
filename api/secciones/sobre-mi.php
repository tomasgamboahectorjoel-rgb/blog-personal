<?php
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
        <p class="sobretitulo">Sobre mí</p>
        <h1>Quién soy</h1>

        <div class="presentacion">
            <aside class="ficha">
                <img class="ficha-foto" src="<?= e($perfil["foto"]) ?>" alt="Retrato de <?= e($perfil["nombre_corto"]) ?>" width="400" height="400">
                <dl class="ficha-datos">
                    <div><dt>Nombre</dt><dd><?= e($perfil["nombre"]) ?></dd></div>
                    <div><dt>Vivo en</dt><dd><?= e($perfil["ubicacion"]) ?></dd></div>
                    <div><dt>Estudio</dt><dd>Ing. de Sistemas e Informática, UNS</dd></div>
                    <div><dt>Idiomas</dt><dd>Español e inglés (elemental)</dd></div>
                    <div><dt>Certificación</dt><dd>Scrum Fundamentals Certified</dd></div>
                    <div><dt>Busco</dt><dd>Trabajo en big data e IA</dd></div>
                </dl>
            </aside>

            <div class="presentacion-texto">
                <p class="lead"><?= e($perfil["frase"]) ?></p>
                <p>Hola, soy <?= e($perfil["nombre"]) ?>. Estudio Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa, en Nuevo Chimbote, y voy en el décimo ciclo, el último de la carrera.</p>
                <p>Lo que más me gusta es construir software que sirva de verdad, sobre todo cuando hay inteligencia artificial de por medio. Estoy con una tesis de realidad aumentada, en mis prácticas desarrollé un agente de IA y ahora quiero trabajar en big data e IA.</p>
                <p>Me describo como alguien responsable, con muchas ganas de aprender, atento a los detalles y cómodo trabajando en equipo. Prefiero las soluciones simples y bien armadas, y me gusta mostrar evidencia en lugar de suponer.</p>
                <p>Busco oportunidades para crecer en el área de TI y aportar con soluciones bien estructuradas. Si algo de lo que ves te interesa, escríbeme desde la página de <a href="/contacto">contacto</a> y con gusto te respondo.</p>
            </div>
        </div>
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
