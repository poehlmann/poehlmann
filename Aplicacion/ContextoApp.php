<?php

namespace Aplicacion;
use \PDO;

class ContextoApp {
	private $conexion;
	
	public $usuarios;
	
	public function __construct($config) {
		$this->conexion = new PDO(
			$config['db']['conn'],
			$config['db']['user'],
			$config['db']['pass']
		);
		
		$this->usuarios = new Sets\Usuarios($this->conexion);
	}
}