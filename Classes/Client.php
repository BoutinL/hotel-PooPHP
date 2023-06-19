<?php

Class Client{

	private string $_nom;
	private string $_prenom;
	private array $_reservations;

	public function __construct(string $nom, string $prenom){

		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_reservations = [];

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

	public function getReservations(){
		return $this->_reservations;
	}

	public function setReservations($_reservations){
		$this->_reservations = $_reservations;
	}

	// Méthode qui ajoute une réservation à son client

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	// Méthode pour afficher les réservations d'un client

	// toString

	public function __toString(){
		return $this->_nom." ".$this->_prenom;
	}
}