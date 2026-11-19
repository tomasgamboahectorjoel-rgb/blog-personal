<section class="bloque">
    <div class="contenedor">
        <p class="sobretitulo">Proyectos</p>
        <h1>Lo que he construido</h1>
        <p class="lead">Una tesis, un agente de IA, automatizaciones para clientes y proyectos de curso. Cada tarjeta dice el estado real del trabajo.</p>

        <div class="rejilla rejilla-2 proyectos">
            <?php foreach ($proyectos as $p): ?>
                <article class="tarjeta proyecto">
                    <div class="proyecto-cabeza">
                        <span class="etiqueta"><?= e($p["tipo"]) ?></span>
                        <span class="estado estado-<?= $p["estado"] === "En curso" || $p["estado"] === "En evolución" ? "activo" : "listo" ?>"><?= e($p["estado"]) ?></span>
                    </div>
                    <h3><?= e($p["titulo"]) ?></h3>
                    <p><?= e($p["descripcion"]) ?></p>
                    <ul class="chips">
                        <?php foreach ($p["stack"] as $tec): ?>
                            <li><?= e($tec) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>

        <p class="nota">Más código en <a href="<?= e($perfil["github"]) ?>" target="_blank" rel="noopener">mi GitHub</a>.</p>
    </div>
</section>
