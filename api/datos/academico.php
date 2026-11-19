<?php
/*****
MI BLOG PERSONAL - DATOS ACADÉMICOS
Fuente del plan de estudios: Currículo 2018 de la EPISI (UNS),
Resolución N.° 509-2018-CU-R-UNS.
*****/

$carrera = [
    "Universidad"      => "Universidad Nacional del Santa (UNS)",
    "Sede"             => "Nuevo Chimbote, Perú",
    "Programa"         => "Ingeniería de Sistemas e Informática",
    "Facultad"         => "Ingeniería",
    "Ingreso"          => "2022, desde el primer ciclo",
    "Ciclo actual"     => "Décimo, el último de la carrera",
    "Egreso previsto"  => "Diciembre de 2026",
    "Modalidad"        => "Presencial. El primer año fue semipresencial por el covid.",
    "Grado"            => "Bachiller en Ingeniería de Sistemas e Informática",
    "Título"           => "Ingeniero de Sistemas e Informática",
    "Plan de estudios" => "220 créditos en 10 ciclos semestrales (Currículo 2018)",
];

$plan = [
    "I"   => ["Geometría Analítica", "Cálculo Diferencial", "Dibujo de Ingeniería", "Lenguaje y Técnicas de Comunicación", "Introducción a la Ingeniería", "Inglés I"],
    "II"  => ["Cálculo Integral", "Física I", "Química I", "Creatividad e Innovación", "Tecnologías de Información y Comunicación", "Inglés II"],
    "III" => ["Algoritmos", "Electrónica Digital", "Dinámica de Sistemas I", "Física II", "Estadística para Ingenieros", "Investigación Científica en TI"],
    "IV"  => ["Programación", "Arquitectura de Computadoras", "Dinámica de Sistemas II", "Estructura de Datos", "Ingeniería de Requisitos", "Investigación de Operaciones I"],
    "V"   => ["Patrones de Diseño de Software", "Sistemas Operativos", "Base de Datos I", "Gestión Empresarial Basada en TI", "Sistemas de Información I", "Investigación de Operaciones II"],
    "VI"  => ["Aplicaciones Distribuidas I", "Comunicación de Datos", "Base de Datos II", "Arquitectura de Software Empresarial", "Sistemas de Información II", "Administración de Procesos de Negocio"],
    "VII" => ["Aplicaciones Distribuidas II", "Redes de Computadoras I", "Inteligencia de Negocio y Analítica de Datos", "Gestión de Tecnologías de Información I", "Ingeniería de Software I", "Simulación Empresarial"],
    "VIII" => ["Arquitectura Orientada a Servicios y Microservicios", "Redes de Computadoras II", "Inteligencia Artificial", "Gestión de Tecnologías de Información II", "Ingeniería de Software II", "Electivo 1: Agentes Inteligentes"],
    "IX"  => ["Aplicaciones Móviles", "Seguridad Informática", "Robótica", "Gestión del Gobierno de TI", "Electivo 2: Algoritmos Evolutivos y de Aprendizaje", "Tesis I"],
    "X"   => ["Aplicaciones en la Nube", "Administración de Centros de Datos", "Modelo de Sistema Viable", "Auditoría de Sistemas", "Gestión de la Arquitectura Empresarial", "Tesis II"],
];

/* Cursos agrupados por tema, tomados del mismo plan de estudios. */
$grupos = [
    "Ciberseguridad" => ["Seguridad Informática (IX)", "Auditoría de Sistemas (X)"],
    "Robótica" => ["Robótica (IX)", "Electrónica Digital (III)"],
    "Inteligencia artificial y datos" => ["Inteligencia Artificial (VIII)", "Inteligencia de Negocio y Analítica de Datos (VII)", "Agentes Inteligentes (electivo, VIII)", "Algoritmos Evolutivos y de Aprendizaje (electivo, IX)"],
    "Software" => ["Algoritmos (III)", "Programación (IV)", "Estructura de Datos (IV)", "Ingeniería de Requisitos (IV)", "Patrones de Diseño de Software (V)", "Aplicaciones Distribuidas I y II (VI y VII)", "Ingeniería de Software I y II (VII y VIII)", "Arquitectura Orientada a Servicios y Microservicios (VIII)", "Aplicaciones Móviles (IX)", "Aplicaciones en la Nube (X)"],
    "Bases de datos, redes y sistemas" => ["Base de Datos I y II (V y VI)", "Sistemas Operativos (V)", "Arquitectura de Computadoras (IV)", "Comunicación de Datos (VI)", "Redes de Computadoras I y II (VII y VIII)", "Administración de Centros de Datos (X)"],
    "Ciencias base" => ["Cálculo Diferencial e Integral (I y II)", "Geometría Analítica (I)", "Física I y II (II y III)", "Química I (II)", "Estadística para Ingenieros (III)", "Investigación de Operaciones I y II (IV y V)"],
];
?>
