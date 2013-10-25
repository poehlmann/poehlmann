<?php

namespace DAL;

abstract class Entidad {
	private $modificaciones = array();
	
	public function limpiarModificaciones() {
		$this->modificaciones = array();
	}
	
	public function campoModificado($nombre, $valor) {
		$this->modificaciones[$nombre] = $valor;
	}
	
	public abstract function todosCampos();
}