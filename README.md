# Mi blog personal

Blog en PHP para Vercel
```
vercel.json            runtime vercel-php@0.7.3 y rutas
api/index.php          router y plantilla base
api/datos/             perfil, entradas, proyectos y plan de estudios
api/secciones/         una vista por página
public/                css, js, foto de perfil y favicon
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
