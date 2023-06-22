<?php

Class Chambre{

	private int $_numero;
	private bool $_disponibilite;
	private int $_nbrLit;
	private float $_prix;
	private bool $_wifi;
	private Hotel $_hotel;
	private array $_reservations;

	public function __construct(int $numero, bool $_disponibilite, int $nbrLit, float $prix, bool $wifi, Hotel $hotel){

		$this->_numero = $numero;
		$this->_disponibilite = $_disponibilite;
		$this->_nbrLit = $nbrLit;
		$this->_prix = $prix;
		$this->_wifi = $wifi;
		$this->_hotel = $hotel;
		$this->_hotel->ajouterChambre($this);
		$this->_reservations = [];

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
	
	public function getReservations(){
		return $this->_reservations;
	}

	public function setReservations(array $reservation){
		$this->_reservations = $reservation;
	}

	public function getHotel(){
		return $this->_hotel;
	}

	// Méthode qui ajoute une réservation à une chambre

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	public function infoChambre() {
		return $this->_nbrLit." lit(s) - ".$this->_prix." € wifi: ".$this->_wifi;
	}
	
	// toString

	public function __toString(){
		return $this->_numero." ".$this->_disponibilite." ".$this->_nbrLit." ".$this->_prix." ".$this->_wifi;
	}

}