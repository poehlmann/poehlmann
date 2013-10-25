<?php

namespace Aplicacion;

class Configuracion {
	// opcionalmente leer de archivo
	public static function leer() {
		$configuracion = array();
		
		$configuracion['db'] = array(
			'conn'		=> 'mysql:host=localhost;dbname=bolsalaboral',
			'user'		=> 'root',
			'pass'		=> ''
		);
		
		return $configuracion;
	}
}