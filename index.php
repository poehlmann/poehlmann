<?php

// Cargar componentes

define('APP_ROOT', dirname(__FILE__));

require APP_ROOT . '/Sistema/Sistema.php';

// Inicializar aplicacion

$app = new \Aplicacion\Aplicacion();

$usuarios = $app->bd->usuarios->todos();

foreach ($usuarios as $usuario) {
	echo $usuario->getUsername(), '\n';
}