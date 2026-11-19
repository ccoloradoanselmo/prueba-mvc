<?php
require_once __DIR__ . '/../config.php';
require_once RUTA_MODELOS . 'AsignaturaModelo.php';

// 1. Creamos el modelo
$obj = new AsignaturaModelo();

// 2. Ejecutamos el método
$datos = $obj->listar();

// 3. Mensaje
$mensaje = empty($datos) ? "No hay asignaturas registradas" : "";

// 4. Cargamos la vista
require RUTA_VISTAS . 'vlistarasignatura.php';