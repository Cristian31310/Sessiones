<?php

/** ARCHIVO DE ARRANQUE  */

declare(strict_types=1);

// Ruta absoluta a la raíz del proyecto.
define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/autoloader.php';
require BASE_PATH . '/config/config.php';
require BASE_PATH . '/config/routes.php';
require_once BASE_PATH . '/src/Core/helpers.php';

use Core\Router;
use Core\Session;

// La sesión se inicia UNA sola vez por petición, antes de cualquier salida.
Session::iniciar();
Session::has('e3d124185ddab2a4324e1a2e1cf2c81d');
// Etapa 6: aquí se llamará a Session::comprobarCaducidad();

// Evalúa la URL recibida y ejecuta la función/controlador asociado
Router::dispatch();
