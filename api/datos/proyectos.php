<?php
/*****
MI BLOG PERSONAL - PROYECTOS
Para agregar uno, copia un bloque. "tipo" puede ser cualquier texto corto.
*****/

$proyectos = [
    [
        "titulo"      => "Aplicativo móvil de realidad aumentada para estudiar el hígado",
        "tipo"        => "Tesis",
        "estado"      => "En curso",
        "descripcion" => "App para que estudiantes de Medicina Humana de la UNS exploren un hígado en 3D, por dentro y con tumores hepáticos. Los modelos salen de dos fuentes: Z-Anatomy para el hígado sano por capas y el Medical Segmentation Decathlon (tarea 8) para vasos y tumores. Va dentro del curso Tesis II.",
        "stack"       => ["Unity", "ARCore", "Blender", "Android Studio", "Mobile-D"],
    ],
    [
        "titulo"      => "Agente de IA para ventas por WhatsApp",
        "tipo"        => "Prácticas",
        "estado"      => "Terminado",
        "descripcion" => "Mi resultado principal en Neuracode. Hice el backend de un agente conversacional que apoya la gestión de ventas de un comercio: árbol de flujos, conexión con la IA y base de datos. El bot de WhatsApp es una pieza aparte que solo reenvía los mensajes al backend.",
        "stack"       => [".NET", "Clean Architecture", "BuilderBot", "WhatsApp Business API"],
    ],
    [
        "titulo"      => "Hola Mujer: reservas de citas por WhatsApp",
        "tipo"        => "Cliente",
        "estado"      => "En evolución",
        "descripcion" => "Sistema de reservas para un consultorio de obstetricia en Nuevo Chimbote. Maneja paquetes de varias sesiones, cancelaciones y limpieza de citas vencidas. El siguiente paso es pasar la automatización a n8n y sumar un agente conversacional con IA.",
        "stack"       => ["ManyChat", "Make.com", "cal.com", "Google Sheets", "Apps Script"],
    ],
    [
        "titulo"      => "UrbanCloud AI",
        "tipo"        => "Curso en grupo",
        "estado"      => "En curso",
        "descripcion" => "Plataforma en la nube para gestionar incidencias urbanas. La ciudadanía reporta con foto, texto y ubicación, y una IA clasifica el caso y sugiere prioridad y área responsable. Tiene cinco roles: ciudadano, operador, supervisor, técnico y administrador. Es el proyecto de Aplicaciones en la Nube.",
        "stack"       => ["FastAPI", "React", "PostgreSQL", "Supabase", "Vercel", "Railway"],
    ],
    [
        "titulo"      => "Pasantía en la Universidad de Lima",
        "tipo"        => "Pasantía",
        "estado"      => "Terminado",
        "descripcion" => "Del 28 de septiembre al 23 de octubre de 2026, en un grupo de cuatro estudiantes. Trabajamos una plataforma de clasificación inteligente de incidencias de TI. También hubo un taller guiado de IoT, donde registramos datos reales con un oxímetro MAX30102 y un módulo Heltec LoRa.",
        "stack"       => ["ESP32", "LoRa", "MAX30102", "IA"],
    ],
    [
        "titulo"      => "FoodMatch",
        "tipo"        => "Curso",
        "estado"      => "Terminado",
        "descripcion" => "Aplicación móvil para Android, trabajada con la metodología Mobile-D y con la documentación completa del proceso.",
        "stack"       => ["Android", "Mobile-D"],
    ],
    [
        "titulo"      => "Laboratorios de seguridad y gobierno de TI",
        "tipo"        => "Cursos",
        "estado"      => "Terminado",
        "descripcion" => "Laboratorio de forense digital en Seguridad Informática, evaluaciones COBIT en Gobierno de TI y casos de laboratorio de Algoritmos Evolutivos. En los informes escribo solo lo que la evidencia respalda.",
        "stack"       => ["Kali Linux", "Autopsy", "Sleuth Kit", "Wireshark", "VMware"],
    ],
    [
        "titulo"      => "Modpacks de Minecraft",
        "tipo"        => "Personal",
        "estado"      => "En curso",
        "descripcion" => "Mi taller aparte. Mantengo dos entornos de modding, uno con Fabric y otro con Forge 1.16.5, y pruebo mis modpacks en un servidor de Aternos.",
        "stack"       => ["Fabric", "Forge", "Aternos"],
    ],
];

/* Herramientas agrupadas por área */
$herramientas = [
    "IA y datos"            => ["Python", "Agentes de IA", "API de Anthropic", "matplotlib", "sympy"],
    "Desarrollo"            => ["Node.js", ".NET", "Next.js", "FastAPI", "PHP"],
    "Nube y datos"          => ["Supabase", "Railway", "Vercel", "GitHub"],
    "Móvil y realidad aumentada" => ["Android Studio", "Kotlin", "Unity", "ARCore", "Blender"],
    "Automatización"        => ["ManyChat", "Make.com", "cal.com", "Google Sheets", "Apps Script"],
    "Seguridad"             => ["Kali Linux", "Wireshark", "Metasploit", "Autopsy", "VMware Workstation"],
];
?>
