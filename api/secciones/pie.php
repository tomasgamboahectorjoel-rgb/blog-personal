<footer class="pie">
    <div class="contenedor pie-fila">
        <div>
            <p class="pie-nombre"><?= e($perfil["nombre"]) ?></p>
            <p><?= e($perfil["ubicacion"]) ?></p>
        </div>
        <ul class="pie-enlaces">
            <li><a href="mailto:<?= e($perfil["correo"]) ?>">Correo</a></li>
            <li><a href="<?= e($perfil["linkedin"]) ?>" target="_blank" rel="noopener">LinkedIn</a></li>
            <li><a href="<?= e($perfil["github"]) ?>" target="_blank" rel="noopener">GitHub</a></li>
        </ul>
    </div>
    <div class="contenedor pie-linea">
        <p>&copy; <?= e($perfil["anio"]) ?> <?= e($perfil["nombre"]) ?>. Hecho con PHP y publicado en Vercel.</p>
        <a href="#contenido">Volver arriba</a>
    </div>
</footer>
