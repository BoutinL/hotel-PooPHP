<?php

Class Chambre{

	private int $_numero;
	private bool $_disponibilite;
	private int $_nbrLit;
	private float $_prix;
	private bool $_wifi;

	public function __construct(int $numero, bool $_disponibilite, int $nbrLit, float $prix, bool $wifi){

		$this->_numero = $numero;
		$this->_disponibilite = $_disponibilite;
		$this->_nbrLit = $nbrLit;
		$this->_prix = $prix;
		$this->_wifi = $wifi;

	}

	public function getNumero(){
		return $this->_numero;
	}

	public function setNumero(int $numéro){
		$this->_numero = $numero;
	}

	public function getDisponibilite(){
		return $this->_disponibilite;
	}

	public function setDisponibilite(bool $disponibilite){
		$this->_disponibilite = $disponibilite;
	}

	public function getNbrLit(){
		return $this->_nbrLit;
	}

	public function setNbrLit(int $nbrLit){
		$this->_nbrLit = $nbrLit;
	}

	public function getPrix(){
		return $this->_prix;
	}

	public function setPrix(float $prix){
		$this->_prix = $prix;
	}

	public function getWifi(){
		return $this->_wifi;
	}

	public function setWifi(bool $wifi){
		$this->_wifi = $wifi;
	}
	
	// toString

	public function __toString(){
		return $this->_numero." ".$this->_disponibilite." ".$this->_nbrLit." ".$this->_prix." ".$this->_wifi;
	}

}