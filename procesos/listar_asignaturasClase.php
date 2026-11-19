<?php
require_once __DIR__ . '/../config.php';
require_once RUTA_MODELOS . 'AsignaturaModelo.php';

// 1. Parámetro recibido por POST
$idClases = (int)($_POST['idClases'] ?? 0);

// 2. Creamos el modelo
$obj = new AsignaturaModelo();

// 3. Ejecutamos el método
$datos = $obj->listarPorClase($idClases);

// 4. Mensaje
$mensaje = empty($datos) ? "Esta clase no tiene asignaturas" : "";

// 5. Cargamos la vista
require RUTA_VISTAS . 'vlistarasignaturaclase.php';