<?php

namespace Aplicacion\Sets;

class Usuarios {
	private $conn;
	
	public function __construct($conn) {
		$this->conn = $conn;
	}
	
	// crear un metodo por cada query especifico
	
	public function insertar(Usuario $usuario) {
		$sql = '';
		
		$campos = $usuario->todosCampos();
		
		$sth = $this->conn->prepare($sql);
		$sth->execute($campos);
		
		// FALTA
	}
	
	public function conUsername($username) {
		$sql = 'SELECT * FROM usuario WHERE username = ?';
		
		$sth = $this->conn->prepare($sql);
		$sth->execute(array($username));
		
		return $this->procesarRows($sth->fetchAll());
	}
	
	public function todos() {
		$sql = 'SELECT * FROM usuario';
		
		$sth = $this->conn->query($sql);
		
		return $this->procesarRows($sth->fetchAll());
	}
	
	private function procesarRows($rows) {
		$elems = array_map(function ($row) {
			return new Usuario($row);
		}, $rows);
		
		return $elems;
	}
}