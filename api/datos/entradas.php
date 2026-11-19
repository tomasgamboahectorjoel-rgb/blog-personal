<?php
/*****
MI BLOG PERSONAL - ENTRADAS
Para publicar algo nuevo, copia un bloque, cambia el slug (sin espacios ni tildes)
y escribe los párrafos dentro de "cuerpo".
Categorías: academico, profesional, personal.
*****/

$categorias = [
    "academico"   => "Académico",
    "profesional" => "Profesional",
    "personal"    => "Personal",
];

$entradas = [
    [
        "slug"      => "decimo-ciclo-visto-desde-dentro",
        "titulo"    => "El décimo ciclo, visto desde dentro",
        "categoria" => "academico",
        "fecha"     => "2026-11-18",
        "resumen"   => "Seis cursos para cerrar Ingeniería de Sistemas e Informática en la UNS, y la fecha en que termino.",
        "cuerpo"    => [
            "Llegué al último ciclo de la carrera con seis cursos en el plan: Aplicaciones en la Nube, Administración de Centros de Datos, Modelo de Sistema Viable, Auditoría de Sistemas, Gestión de la Arquitectura Empresarial y Tesis II.",
            "Durante buena parte de la carrera lo que más se hace es programar. En este ciclo la mirada se mueve a lo que rodea al software: dónde se ejecuta, cómo se audita y de qué manera encaja en una organización.",
            "Entré a la universidad en 2022 y mi egreso está previsto para diciembre de 2026. Quedan pocas semanas de clases y bastante por entregar.",
        ],
    ],
    [
        "slug"      => "una-tesis-con-realidad-aumentada",
        "titulo"    => "Una tesis con realidad aumentada para estudiar el hígado",
        "categoria" => "academico",
        "fecha"     => "2026-11-14",
        "resumen"   => "Qué hace mi aplicativo, con qué herramientas lo construyo y de dónde salen los modelos 3D.",
        "cuerpo"    => [
            "Mi tesis es una aplicación móvil de realidad aumentada para analizar la anatomía del hígado. Está pensada para estudiantes de Medicina Humana de la UNS.",
            "La idea es que el estudiante pueda explorar un hígado en 3D, mirarlo por dentro y ver los tumores hepáticos, cosas que una lámina o un libro no dejan hacer.",
            "Trabajo con Unity y ARCore. Blender me sirve para preparar los modelos, Android Studio para la parte móvil, y la metodología es Mobile-D.",
            "Para los modelos 3D elegí dos fuentes. Z-Anatomy aporta un hígado sano separado por capas, y el Medical Segmentation Decathlon (tarea 8) aporta los vasos y los tumores.",
            "Este semestre la tesis avanza dentro del curso Tesis II, donde preparo el primer avance del informe.",
        ],
    ],
    [
        "slug"      => "algoritmos-agentes-y-evolucion",
        "titulo"    => "Algoritmos, agentes y evolución",
        "categoria" => "academico",
        "fecha"     => "2026-11-12",
        "resumen"   => "El curso que mejor me salió, los dos electivos que elegí por interés y lo que cambiaron en mi forma de ver la IA.",
        "cuerpo"    => [
            "Algoritmos fue mi mejor nota en un curso técnico: terminé con 19 de promedio. También es uno de mis cursos favoritos, así que aquí coincidieron el gusto y el resultado.",
            "Los electivos los elegí por curiosidad. Tomé Agentes Inteligentes y Algoritmos Evolutivos y de Aprendizaje, y los dos pertenecen a la línea de Inteligencia Artificial y Robótica del plan de estudios.",
            "Agentes Inteligentes me acercó al mundo de los agentes y de la IA. Algoritmos Evolutivos me enseñó a razonar a partir de la evolución y me dejó pensando en la relación entre la informática y el proceso evolutivo de la humanidad.",
            "Ese interés terminó teniendo una salida práctica, porque en mis prácticas desarrollé un agente de IA. Hoy lo que busco es trabajar en big data e inteligencia artificial.",
        ],
    ],
    [
        "slug"      => "cuatro-meses-de-practicas-y-un-agente-de-ia",
        "titulo"    => "Cuatro meses de prácticas y un agente de IA",
        "categoria" => "profesional",
        "fecha"     => "2026-11-05",
        "resumen"   => "Qué hace Neuracode, cuál fue mi puesto y cómo está armado el agente que desarrollé.",
        "cuerpo"    => [
            "Hice mis prácticas preprofesionales en Neuracode, una S.A.C. que dicta cursos de capacitación en tecnología y desarrolla sistemas a medida para empresas. Entré como practicante programador al área de desarrollo y estuve cerca de cuatro meses, entre marzo y julio.",
            "El resultado principal fue un agente de IA que conversa por WhatsApp y apoya la gestión de ventas de un comercio. Yo trabajé en el backend, hecho en .NET con arquitectura limpia: el árbol de flujos de la conversación, la conexión con la IA y la base de datos.",
            "El bot que recibe los mensajes es una pieza aparte, escrita en Node.js con BuilderBot. No tiene inteligencia propia: reenvía cada mensaje al backend y devuelve la respuesta.",
            "Las herramientas del día a día fueron GitHub, Vercel, Supabase y Railway.",
        ],
    ],
    [
        "slug"      => "dos-pasantias-la-laguna-y-lima",
        "titulo"    => "Dos pasantías: La Laguna en 2025 y Lima en 2026",
        "categoria" => "profesional",
        "fecha"     => "2026-10-28",
        "resumen"   => "No hice intercambios, pero sí dos pasantías, una en España y otra en Lima.",
        "cuerpo"    => [
            "No hice intercambios ni cursos en otras universidades. Lo que sí hice fueron dos pasantías.",
            "La primera fue internacional, en la Universidad de La Laguna, en España, a finales de septiembre y durante octubre de 2025.",
            "La segunda fue en la Universidad de Lima, del 28 de septiembre al 23 de octubre de 2026. Trabajé con un grupo de cuatro estudiantes en una plataforma de clasificación inteligente de incidencias de TI, y participé en un taller guiado de IoT con ESP32, LoRa y sensores biomédicos.",
            "Mi certificado de pasantía menciona inteligencia artificial, bases de datos y tecnologías web.",
        ],
    ],
    [
        "slug"      => "tres-reglas-para-trabajar",
        "titulo"    => "Tres reglas que repito en casi todo lo que hago",
        "categoria" => "personal",
        "fecha"     => "2026-10-20",
        "resumen"   => "La evidencia manda, un módulo a la vez y mejor simple que ingenioso.",
        "cuerpo"    => [
            "Con el tiempo me quedé con unas reglas de trabajo que repito casi siempre, igual en un informe que en un bot.",
            "La primera: la evidencia manda. En un informe técnico lo escrito tiene que coincidir con lo que pasó de verdad. Si una captura del sistema real contradice lo que había calculado, gana la captura.",
            "La segunda: un módulo a la vez. Avanzo por partes, confirmo cada una con capturas y recién entonces paso a la siguiente.",
            "La tercera: mejor simple que ingenioso. Cuando una solución rebuscada me da problemas al depurar, vuelvo a la más sencilla, aunque sea menos elegante.",
            "En lo académico le sumo una cuarta, que es cumplir APA 7 en todos los documentos.",
        ],
    ],
    [
        "slug"      => "minecraft-mi-taller-aparte",
        "titulo"    => "Minecraft, mi taller aparte",
        "categoria" => "personal",
        "fecha"     => "2026-10-10",
        "resumen"   => "Lo que hago fuera de las clases: modpacks con Fabric y con Forge.",
        "cuerpo"    => [
            "Fuera de las clases, una de mis distracciones es el modding de Minecraft. Mantengo dos entornos de trabajo, uno con Fabric y otro con Forge 1.16.5.",
            "Armo modpacks y los pruebo en un servidor de Aternos, porque hay errores que en un mundo de un solo jugador no aparecen y en el servidor sí.",
            "Parece solo un juego, pero me recuerda a mi trabajo en TI: versiones, dependencias y mucha prueba y error.",
        ],
    ],
];

usort($entradas, fn($a, $b) => strcmp($b["fecha"], $a["fecha"]));
?>
