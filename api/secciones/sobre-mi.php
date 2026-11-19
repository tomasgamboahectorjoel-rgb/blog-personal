<?php
$linea = [
    ["fecha" => "Marzo de 2022", "titulo" => "Ingreso a la UNS", "texto" => "Empiezo Ingeniería de Sistemas e Informática desde el primer ciclo. El primer año fue semipresencial por el covid."],
    ["fecha" => "Septiembre y octubre de 2025", "titulo" => "Pasantía internacional en España", "texto" => "Pasantía en la Universidad de La Laguna."],
    ["fecha" => "De marzo a julio de 2026", "titulo" => "Prácticas en Neuracode", "texto" => "Practicante programador en el área de desarrollo. Desarrollo un agente de IA."],
    ["fecha" => "28 de septiembre al 23 de octubre de 2026", "titulo" => "Pasantía en la Universidad de Lima", "texto" => "Grupo de cuatro estudiantes, plataforma de clasificación de incidencias de TI y taller de IoT."],
    ["fecha" => "Segundo semestre de 2026", "titulo" => "Décimo ciclo y Tesis II", "texto" => "Último ciclo de la carrera, con la tesis de realidad aumentada en marcha."],
    ["fecha" => "Diciembre de 2026", "titulo" => "Egreso previsto", "texto" => "Cierre de la carrera y búsqueda de trabajo en big data e IA."],
];

$reglas = [
    ["titulo" => "La evidencia manda", "texto" => "En un informe técnico lo escrito debe coincidir con lo que pasó de verdad. Si la captura del sistema real contradice lo calculado, gana la captura."],
    ["titulo" => "Un módulo a la vez", "texto" => "Avanzo por partes y confirmo cada una con capturas antes de pasar a la siguiente."],
    ["titulo" => "Mejor simple que ingenioso", "texto" => "Si una solución rebuscada da problemas al depurar, vuelvo a la más sencilla."],
    ["titulo" => "Documentos en regla", "texto" => "Todo lo académico va en APA 7, con tablas limpias y sin adornos."],
];

$intereses = [
    ["titulo" => "Agentes e IA", "texto" => "Me acerqué por el electivo de Agentes Inteligentes y terminé construyendo uno."],
    ["titulo" => "Algoritmos evolutivos", "texto" => "Me interesa cómo la evolución sirve para razonar y para resolver problemas."],
    ["titulo" => "Realidad aumentada en medicina", "texto" => "Es el tema de mi tesis: un hígado en 3D para estudiantes de Medicina."],
    ["titulo" => "Automatización", "texto" => "Reservas y ventas por WhatsApp con ManyChat y Make, y n8n como siguiente paso."],
    ["titulo" => "Ciberseguridad y forense", "texto" => "Laboratorios con Kali Linux, Autopsy y Wireshark."],
    ["titulo" => "Minecraft modding", "texto" => "Mi taller aparte, con modpacks en Fabric y en Forge."],
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
                <p>Hola, soy <?= e($perfil["nombre"]) ?>. Estudio Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa, en Nuevo Chimbote, y estoy en el décimo ciclo, el último de la carrera.</p>
                <p>Lo que más me atrae es construir software que sirva para algo, sobre todo cuando hay inteligencia artificial de por medio. Tengo una tesis en curso con realidad aumentada, desarrollé un agente de IA en mis prácticas y hoy quiero trabajar en big data e IA.</p>
                <p>Me considero una persona responsable, con ganas de aprender, atento al detalle y a gusto trabajando en equipo. Prefiero las soluciones simples y bien estructuradas, y prefiero mostrar evidencia antes que suposiciones.</p>
                <p>Busco oportunidades para seguir creciendo en el área de TI y aportar con soluciones tecnológicas bien armadas. Si algo de lo que ves aquí te interesa, escríbeme desde la página de <a href="/contacto">contacto</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class="bloque bloque-suave">
    <div class="contenedor estrecho">
        <p class="sobretitulo">Línea de vida</p>
        <h2>Mi recorrido desde 2022</h2>
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
        <h2>Mis reglas</h2>
        <div class="rejilla rejilla-4">
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
