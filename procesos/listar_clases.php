<?php
require_once __DIR__ . '/../config.php';
require_once RUTA_MODELOS . 'ClaseModelo.php';

// 1. Creamos el modelo
$obj = new ClaseModelo();

// 2. Ejecutamos el método
$datos = $obj->listar();

// 3. Mensaje
$mensaje = empty($datos) ? "No hay clases registradas" : "";

// 4. Cargamos la vista
require RUTA_VISTAS . 'vformulario.php';