<?php

Class Hotel{

	private string $_nom;
	private string $_adresse;

	public function __construct(string $nom, string $adresse){

		$this->_nom = $nom;
		$this->_adresse = $adresse;

	}

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom = $nom;
	}

	public function getAdresse(){
		return $this->_adresse;
	}

	public function setAdresse(string $adresse){
		$this->_adresse = $adresse;
	}

	// toString

	public function __toString(){
		return $this->_nom." ".$this->_adresse."<br/>";
	}

}