<?php

Class Hotel{

	private string $_nom;
	private string $_adresse;
	private array $_reservations;
	private array $_chambres;

	public function __construct(string $nom, string $adresse){

		$this->_nom = $nom;
		$this->_adresse = $adresse;
		$this->_reservations = [];
		$this->_chambres = [];

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

	// Méthode qui ajoute une réservation à son hotel

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	// Méthode qui ajoute une chambre à son hotel

	public function ajouterChambre(Chambre $chambre){
		array_push($this->_chambres, $chambre);
	}

	// Méthode pour afficher les réservations d'un hotel

	
	public function afficherReservationsHotel(){

	}


	// toString

	public function __toString(){
		return $this->_nom." ".$this->_adresse."<br/>";
	}

}