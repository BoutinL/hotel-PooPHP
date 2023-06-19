<?php

Class Client{

	private string $_nom;
	private string $_prenom;

	public function __construct(string $nom, string $prenom){

		$this->_nom = $nom;
		$this->_prenom = $prenom;

	}

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom = $nom;
	}

	public function getPrenom(){
		return $this->_prenom;
	}

	public function setPrenom(string $prenom){
		$this->_prenom = $prenom;
	}

	// toString

	public function __toString(){
		return $this->_nom." ".$this->_prenom;
	}
}