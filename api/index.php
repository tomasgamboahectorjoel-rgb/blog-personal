<?php
/*****
MI BLOG PERSONAL
Punto de entrada único (Vercel + vercel-php). Aquí se decide qué página mostrar.
*****/

declare(strict_types=1);

/* Servidor local: si piden un archivo estático de /public, lo entrega PHP directamente. */
if (PHP_SAPI === "cli-server") {
    $ruta_url = parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH) ?: "/";
    $archivo  = __DIR__ . "/../public" . $ruta_url;
    if ($ruta_url !== "/" && is_file($archivo)) {
        return false;
    }
}

require __DIR__ . "/datos/perfil.php";
require __DIR__ . "/datos/entradas.php";
require __DIR__ . "/datos/academico.php";
require __DIR__ . "/datos/proyectos.php";

/* ---------- Funciones de ayuda ---------- */

function e(?string $texto): string
{
    return htmlspecialchars($texto ?? "", ENT_QUOTES, "UTF-8");
}

function fecha_es(string $fecha): string
{
    $meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio",
              "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
    $t = strtotime($fecha);
    return date("j", $t) . " de " . $meses[(int) date("n", $t) - 1] . " de " . date("Y", $t);
}

function minutos_lectura(array $entrada): int
{
    preg_match_all("/\p{L}+/u", implode(" ", $entrada["cuerpo"]), $palabras);
    return max(1, (int) ceil(count($palabras[0]) / 200));
}

/* ---------- Rutas ---------- */

$ruta = trim((string) parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH), "/");

$paginas = [
    ""            => ["inicio",      "Inicio",      "Blog personal de Héctor Joel Tomas Gamboa: sus gustos, su familia, el Barça, y también su carrera en Ingeniería de Sistemas e Informática en la UNS."],
    "sobre-mi"    => ["sobre-mi",    "Sobre mí",    "Quién soy y qué me gusta: fútbol, el Barça, películas, videojuegos, ají de gallina y tiempo en familia."],
    "academico"   => ["academico",   "Académico",   "Mi carrera en la Universidad Nacional del Santa: recorrido, reglas de trabajo, cursos y plan de estudios."],
    "experiencia" => ["experiencia", "Experiencia", "Prácticas, pasantías, logros y herramientas."],
    "proyectos"   => ["proyectos",   "Proyectos",   "Tesis, agente de IA, automatizaciones y proyectos de curso."],
    "blog"        => ["blog",        "Blog",        "Todas las entradas del blog."],
    "contacto"    => ["contacto",    "Contacto",    "Correo, LinkedIn y GitHub."],
];

$vista       = "404";
$titulo      = "Página no encontrada";
$descripcion = "La página que buscas no existe.";
$activo      = "";
$entrada     = null;

if (isset($paginas[$ruta])) {
    [$vista, $titulo, $descripcion] = $paginas[$ruta];
    $activo = $ruta;
} elseif (preg_match("#^blog/([a-z0-9-]+)$#", $ruta, $m)) {
    foreach ($entradas as $candidata) {
        if ($candidata["slug"] === $m[1]) {
            $entrada     = $candidata;
            $vista       = "entrada";
            $titulo      = $candidata["titulo"];
            $descripcion = $candidata["resumen"];
            $activo      = "blog";
            break;
        }
    }
}

if ($vista === "404") {
    http_response_code(404);
}

$titulo_pagina = $ruta === "" ? "Mi blog personal | " . $perfil["nombre_corto"] : $titulo . " | Mi blog personal";
?>
<!doctype html>
<html lang="es" data-tema="oscuro">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($titulo_pagina) ?></title>
    <meta name="description" content="<?= e($descripcion) ?>">
    <meta name="author" content="<?= e($perfil["nombre"]) ?>">
    <meta name="theme-color" content="#060913">
    <meta property="og:title" content="<?= e($titulo_pagina) ?>">
    <meta property="og:description" content="<?= e($descripcion) ?>">
    <meta property="og:image" content="<?= e($perfil["foto"]) ?>">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
    <script>
        /* El tema por defecto es oscuro. Si el visitante eligió otro, se aplica antes de pintar. */
        try {
            var t = localStorage.getItem("tema");
            if (t === "claro" || t === "oscuro") { document.documentElement.setAttribute("data-tema", t); }
        } catch (err) {}
    </script>
</head>
<body>
    <canvas id="red-neuronal" aria-hidden="true"></canvas>
    <a class="saltar" href="#contenido">Saltar al contenido</a>
    <?php include __DIR__ . "/secciones/cabecera.php"; ?>
    <main id="contenido">
        <?php include __DIR__ . "/secciones/" . $vista . ".php"; ?>
    </main>
    <?php include __DIR__ . "/secciones/pie.php"; ?>
    <script src="/js/sitio.js" defer></script>
</body>
</html>
