<section class="bloque">
    <div class="contenedor">
        <h1>Contacto</h1>
        <p class="lead">Escríbeme por correo o búscame en LinkedIn y GitHub. Con gusto te respondo.</p>

        <div class="rejilla rejilla-3">
            <a class="tarjeta tarjeta-area" href="mailto:<?= e($perfil["correo"]) ?>">
                <span class="etiqueta">Correo</span>
                <h3><?= e($perfil["correo"]) ?></h3>
                <p>La vía más directa.</p>
            </a>
            <a class="tarjeta tarjeta-area" href="<?= e($perfil["linkedin"]) ?>" target="_blank" rel="noopener">
                <span class="etiqueta">LinkedIn</span>
                <h3>hector-tomas-gamboa-ti</h3>
                <p>Mi perfil profesional.</p>
            </a>
            <a class="tarjeta tarjeta-area" href="<?= e($perfil["github"]) ?>" target="_blank" rel="noopener">
                <span class="etiqueta">GitHub</span>
                <h3>tomasgamboahectorjoel-rgb</h3>
                <p>Mis repositorios.</p>
            </a>
        </div>

        <p class="aparte">Vivo en <?= e($perfil["ubicacion"]) ?>.</p>
    </div>
</section>
