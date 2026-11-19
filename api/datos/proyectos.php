<?php
/*****
MI BLOG PERSONAL - PROYECTOS
Para agregar uno, copia un bloque. "tipo" puede ser cualquier texto corto.
"stack" puede ir vacío.
*****/

$proyectos = [
    [
        "titulo"      => "Aplicativo móvil de realidad aumentada para estudiar el hígado",
        "tipo"        => "Tesis",
        "estado"      => "En curso",
        "descripcion" => "Una aplicación móvil de realidad aumentada para que estudiantes de Medicina Humana de la UNS estudien el hígado en 3D, por dentro y con tumores hepáticos. Está en curso, dentro del curso Tesis II.",
        "stack"       => [],
    ],
    [
        "titulo"      => "Agente de IA para ventas por WhatsApp",
        "tipo"        => "Prácticas",
        "estado"      => "Terminado",
        "descripcion" => "Mi resultado principal en Neuracode. Hice el backend de un agente que conversa por WhatsApp y ayuda a gestionar las ventas de un comercio: el árbol de flujos, la conexión con la IA y la base de datos. El bot de WhatsApp es otra pieza que solo pasa los mensajes al backend.",
        "stack"       => [".NET", "Clean Architecture", "BuilderBot", "WhatsApp Business API"],
    ],
    [
        "titulo"      => "Hola Mujer: reservas de citas por WhatsApp",
        "tipo"        => "Cliente",
        "estado"      => "En evolución",
        "descripcion" => "Un sistema para que los clientes de un consultorio de obstetricia en Nuevo Chimbote reserven citas por WhatsApp. Maneja paquetes de varias sesiones, cancelaciones y limpieza de citas vencidas. Lo que viene es pasar la automatización a n8n y sumar un agente conversacional con IA.",
        "stack"       => ["ManyChat", "Make.com", "cal.com", "Google Sheets", "Apps Script"],
    ],
    [
        "titulo"      => "UrbanCloud AI",
        "tipo"        => "Curso en grupo",
        "estado"      => "En curso",
        "descripcion" => "Una plataforma en la nube para gestionar incidencias de la ciudad. La gente reporta con foto, texto y ubicación, y una IA clasifica el caso y sugiere su prioridad y el área responsable. Tiene cinco roles: ciudadano, operador, supervisor, técnico y administrador. Es el proyecto del curso Aplicaciones en la Nube.",
        "stack"       => ["FastAPI", "React", "PostgreSQL", "Supabase", "Vercel", "Railway"],
    ],
    [
        "titulo"      => "Pasantía en la Universidad de Lima",
        "tipo"        => "Pasantía",
        "estado"      => "Terminado",
        "descripcion" => "Del 28 de septiembre al 23 de octubre de 2026, junto a otros tres estudiantes. Trabajamos en una plataforma de clasificación inteligente de incidencias de TI. También hubo un taller guiado de IoT, donde registramos datos reales con un oxímetro MAX30102 y un módulo Heltec LoRa.",
        "stack"       => ["ESP32", "LoRa", "MAX30102", "IA"],
    ],
    [
        "titulo"      => "FoodMatch",
        "tipo"        => "Curso",
        "estado"      => "Terminado",
        "descripcion" => "Una aplicación móvil para Android, trabajada con la metodología Mobile-D y con toda la documentación del proceso.",
        "stack"       => ["Android", "Mobile-D"],
    ],
    [
        "titulo"      => "Laboratorios de seguridad y gobierno de TI",
        "tipo"        => "Cursos",
        "estado"      => "Terminado",
        "descripcion" => "Forense digital en Seguridad Informática, evaluaciones COBIT en Gobierno de TI y casos de laboratorio en Algoritmos Evolutivos. En mis informes solo cuento lo que la evidencia respalda.",
        "stack"       => ["Kali Linux", "Autopsy", "Sleuth Kit", "Wireshark", "VMware"],
    ],
];

/* Herramientas agrupadas por área */
$herramientas = [
    "IA y datos"     => ["Python", "Agentes de IA", "API de Anthropic", "matplotlib", "sympy"],
    "Desarrollo"     => ["Node.js", ".NET", "Next.js", "FastAPI", "PHP"],
    "Nube y datos"   => ["Supabase", "Railway", "Vercel", "GitHub"],
    "Móvil"          => ["Android Studio", "Kotlin", "Firebase"],
    "Automatización" => ["ManyChat", "Make.com", "cal.com", "Google Sheets", "Apps Script"],
    "Seguridad"      => ["Kali Linux", "Wireshark", "Metasploit", "Autopsy", "VMware Workstation"],
];
?>
