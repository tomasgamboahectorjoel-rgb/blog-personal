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
        "slug"      => "lo-que-busco-al-terminar-la-carrera",
        "titulo"    => "Lo que busco al terminar la carrera",
        "categoria" => "personal",
        "fecha"     => "2026-11-19",
        "resumen"   => "Termino en diciembre y ya sé hacia dónde quiero ir.",
        "cuerpo"    => [
            "Termino la carrera en diciembre de 2026 y ya tengo claro hacia dónde quiero ir: big data e inteligencia artificial.",
            "Busco un lugar donde pueda seguir aprendiendo, trabajar en equipo y construir soluciones bien armadas. Soy responsable, cuido los detalles y me gusta que las cosas queden claras.",
            "Si trabajas en esa área, o conoces a alguien que sí, me encantaría conversar. Puedes escribirme desde la página de contacto o por LinkedIn.",
            "Mientras tanto sigo con mi tesis y con todo lo que me falta para egresar.",
        ],
    ],
    [
        "slug"      => "decimo-ciclo-visto-desde-dentro",
        "titulo"    => "El décimo ciclo, visto desde dentro",
        "categoria" => "academico",
        "fecha"     => "2026-11-18",
        "resumen"   => "Seis cursos para cerrar Ingeniería de Sistemas e Informática en la UNS, y la fecha en que termino.",
        "cuerpo"    => [
            "Estoy en el último ciclo de la carrera y tengo seis cursos: Aplicaciones en la Nube, Administración de Centros de Datos, Modelo de Sistema Viable, Auditoría de Sistemas, Gestión de la Arquitectura Empresarial y Tesis II.",
            "Hasta ahora la carrera era sobre todo programar. En este ciclo la mirada cambia y se fija en lo que rodea al software: dónde corre, cómo se audita y cómo encaja dentro de una organización.",
            "Entré a la UNS en 2022 y termino en diciembre de 2026. Quedan pocas semanas de clases y todavía hay bastante por entregar, así que toca ir con orden.",
        ],
    ],
    [
        "slug"      => "mi-tesis-realidad-aumentada-para-estudiar-el-higado",
        "titulo"    => "Mi tesis: realidad aumentada para estudiar el hígado",
        "categoria" => "academico",
        "fecha"     => "2026-11-14",
        "resumen"   => "De qué trata, para quién la hago y en qué punto va.",
        "cuerpo"    => [
            "Mi tesis es una aplicación móvil de realidad aumentada para estudiar la anatomía del hígado. La pensé para estudiantes de Medicina Humana de la UNS.",
            "Imagina tener un hígado en 3D frente a ti: lo giras, lo miras por dentro y ves cómo se ven los tumores hepáticos. Con una lámina o un libro eso es difícil, y es justo lo que quiero ofrecer.",
            "Todavía está en curso. Va dentro del curso Tesis II, donde estoy preparando el primer avance del informe.",
        ],
    ],
    [
        "slug"      => "algoritmos-agentes-y-evolucion",
        "titulo"    => "Algoritmos, agentes y evolución",
        "categoria" => "academico",
        "fecha"     => "2026-11-12",
        "resumen"   => "El curso que mejor me salió, los dos electivos que elegí por interés y lo que cambiaron en mi forma de ver la IA.",
        "cuerpo"    => [
            "Algoritmos fue el curso que mejor me salió: terminé con 19 de promedio. También es de mis favoritos, así que ahí coincidieron el gusto y la nota.",
            "Mis electivos los elegí por pura curiosidad: Agentes Inteligentes y Algoritmos Evolutivos y de Aprendizaje. Los dos están en la línea de Inteligencia Artificial y Robótica del plan.",
            "Agentes Inteligentes me abrió la puerta al mundo de los agentes y de la IA. Algoritmos Evolutivos me enseñó a razonar a partir de la evolución, y me hizo pensar en cómo se relacionan la informática y la evolución de la humanidad.",
            "Ese interés tuvo un resultado concreto: en mis prácticas desarrollé un agente de IA. Y hoy lo que quiero es trabajar en big data e inteligencia artificial.",
        ],
    ],
    [
        "slug"      => "cuatro-meses-de-practicas-y-un-agente-de-ia",
        "titulo"    => "Cuatro meses de prácticas y un agente de IA",
        "categoria" => "profesional",
        "fecha"     => "2026-11-05",
        "resumen"   => "Qué hace Neuracode, cuál fue mi puesto y cómo está armado el agente que desarrollé.",
        "cuerpo"    => [
            "Hice mis prácticas en Neuracode, una S.A.C. que dicta cursos de capacitación en tecnología y desarrolla sistemas a medida para empresas. Entré como practicante programador, en el área de desarrollo, y estuve unos cuatro meses, entre marzo y julio.",
            "Lo más importante que salió de ahí fue un agente de IA que conversa por WhatsApp y ayuda a gestionar las ventas de un comercio. Yo me encargué del backend, hecho en .NET con arquitectura limpia: el árbol de flujos de la conversación, la conexión con la IA y la base de datos.",
            "El bot que recibe los mensajes es otra pieza, escrita en Node.js con BuilderBot. No piensa por sí mismo: pasa cada mensaje al backend y devuelve la respuesta.",
            "En el día a día usé GitHub, Vercel, Supabase y Railway.",
        ],
    ],
    [
        "slug"      => "dos-pasantias-la-laguna-y-lima",
        "titulo"    => "Dos pasantías: La Laguna en 2025 y Lima en 2026",
        "categoria" => "profesional",
        "fecha"     => "2026-10-28",
        "resumen"   => "No hice intercambios, pero sí dos pasantías, una en España y otra en Lima.",
        "cuerpo"    => [
            "No hice intercambios ni cursos en otras universidades, pero sí dos pasantías.",
            "La primera fue en España, en la Universidad de La Laguna, a finales de septiembre y durante octubre de 2025.",
            "La segunda fue en la Universidad de Lima, del 28 de septiembre al 23 de octubre de 2026. Trabajé con otros tres estudiantes en una plataforma que clasifica incidencias de TI de forma inteligente, y también hubo un taller guiado de IoT con ESP32, LoRa y sensores biomédicos.",
            "Mi certificado de pasantía habla de inteligencia artificial, bases de datos y tecnologías web.",
        ],
    ],
    [
        "slug"      => "tres-reglas-simples-para-trabajar",
        "titulo"    => "Tres reglas simples que sigo al trabajar",
        "categoria" => "personal",
        "fecha"     => "2026-10-20",
        "resumen"   => "Digo lo que pasó, avanzo un paso a la vez y empiezo por lo simple.",
        "cuerpo"    => [
            "Cuando trabajo, siempre vuelvo a tres ideas sencillas.",
            "Primera: digo lo que pasó. Si mi cálculo dice una cosa y el sistema muestra otra, me quedo con lo que muestra el sistema.",
            "Segunda: un paso a la vez. Termino una parte, la compruebo con capturas y recién sigo con la siguiente.",
            "Tercera: empiezo por lo simple. Si una solución complicada me da problemas, vuelvo a una más sencilla, aunque sea menos vistosa.",
        ],
    ],
];

usort($entradas, fn($a, $b) => strcmp($b["fecha"], $a["fecha"]));
?>
