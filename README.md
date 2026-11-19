# Mi blog personal

Blog en PHP para Vercel, con estilo de IA y la misma estructura del proyecto de noticias:

```
vercel.json            runtime vercel-php@0.7.3 y rutas
api/index.php          router y plantilla base
api/datos/             perfil, entradas, proyectos y plan de estudios (aquí editas el contenido)
api/secciones/         una vista por página (inicio, sobre-mi, academico, experiencia, proyectos, ...)
public/                css, js (red neuronal, tema), foto de perfil y favicon
```

## Probar en local

Necesitas PHP 8 o superior.

```bash
php -S localhost:8000 -t public api/index.php
```

Abre http://localhost:8000

## Publicar en Vercel

Sin GitHub (CLI):

```bash
npm i -g vercel
vercel        # primera vez, crea el proyecto
vercel --prod
```

Con GitHub: sube la carpeta a un repositorio, entra a vercel.com, elige "Add New Project", importa el repositorio y pulsa Deploy. No hace falta configurar nada más, porque `vercel.json` ya trae el runtime y las rutas.

## Cambiar el contenido

- Tus datos, enlaces y frases de la portada: `api/datos/perfil.php`
- Proyectos: `api/datos/proyectos.php`
- Nueva entrada del blog: copia un bloque en `api/datos/entradas.php`, cambia el `slug` (sin tildes ni espacios) y escribe los párrafos en `cuerpo`.
- Línea de vida, reglas e intereses: variables al inicio de `api/secciones/sobre-mi.php`
- Foto: reemplaza `public/img/perfil.jpg`
- Colores: variables al inicio de `public/css/estilos.css`
