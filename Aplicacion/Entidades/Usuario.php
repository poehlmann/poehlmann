<?php

namespace Aplicacion\Entidades;

class Usuario extends \DAL\Entidad {
	private $username;
	
	private $password_hash;
	
	private $password_salt;
	
	private $creacion;
	
	public function __construct($campos) {
		$this->username = $campos['username'];
		$this->password_hash = $campos['password_hash'];
		$this->password_salt = $campos['password_salt'];
		$this->creacion = $campos['creacion'];
	}
	
	public function __construct($username, $password) {
		$this->username = $username;
		$this->setPassword($password);
		$this->creacion = time();
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	public function setUsername($valor) {
		$this->username = $valor;
		
		$this->campoModificado('username', $this->username);
		
		return $this;
	}
	
	public function getPasswordHash() {
		return $this->password_hash;
	}
	
	public function setPassword($valor) {
		$hash = sha1($valor . $this->password_salt);
		
		$this->password_hash = 'sha1|' . $hash;
		
		$this->campoModificado('password_hash', $this->password_hash);
		
		return $this;
	}
	
	public function getCreacion() {
		return $this->creacion;
	}
	
	public function todosCampos() {
		return array(
			'username'		=> $this->username
		);
	}
}