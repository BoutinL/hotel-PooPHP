<?php

Class Client{

	private string $_nom;
	private string $_prenom;
	private array $_reservations;
	private Chambre $_chambre;

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

	public function setReservations(array $_reservations){
		$this->_reservations = $_reservations;
	}

	public function getChambre(){
		return $this->_chambre;
	}

	public function setChambre(Chambre $chambre){
		$this->_chambre = $chambre;
	}

	// Méthode qui ajoute une réservation à son client

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	// Méthode pour afficher les réservations d'un client

	private function listingReservations() : string
	{
		$result = "-------------------------<br/>";
		foreach($this->_reservations as $reservation){
			$result .= $reservation."<br/>";
		}
		$result .= "-------------------------<br/>";
		return $result;
	} 

	public function afficherReservationsClient(){
		return "Réservations de ".$this->_prenom." ".$this->_nom."<br>".count($this->_reservations)." RESERVATIONS<br/>".$this->listingReservations();
	}

	// toString

	public function __toString(){
		return $this->_nom." ".$this->_prenom;
	}
	
}
