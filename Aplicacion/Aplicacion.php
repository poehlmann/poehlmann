<?php

namespace Aplicacion;

class Aplicacion {
	public $config;
	
	public $bd;
	
	public function __construct() {
		$this->config = Configuracion::leer();
		
		$this->bd = new ContextoApp($this->config);
	}
}