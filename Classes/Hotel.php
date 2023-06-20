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

	public function getReservations(){
		return $this->_reservations;
	}

	public function setReservations(array $reservation){
		$this->_reservations = $reservation;
	}

	// Méthode qui ajoute une réservation à son hotel

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	// Méthode qui ajoute une chambre à son hotel

	public function ajouterChambre(Chambre $chambre){
		array_push($this->_chambres, $chambre);
	}

	// toString

	// private function listingReservations() : string
	// {
	// 	$result = "-------------------------<br/>";
	// 	foreach($this->_reservations as $reservation){
	// 		$result .= $reservation ."<br/>";
	// 	}
	// 	$result .= "-------------------------";
	// 	return $result;
	// } 

	// public function __toString(){
	// 	return "Réservations de l'hotel: ".$this->_nom."<br/>".$this->getReservations()->getClient()->getNom()." ".$this->listingReservations();
	// }
}