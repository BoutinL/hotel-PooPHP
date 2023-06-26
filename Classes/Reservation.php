<?php

Class Reservation{

	private DateTime $_dateDebut;
	private DateTime $_dateFin;
	private Client $_client;
	private Chambre $_chambre;

	public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre){

		$this->_dateDebut = new DateTime($dateDebut);
		$this->_dateFin = new DateTime($dateFin);
		$this->_client = $client;
		$this->_chambre = $chambre;
		$this->_client->ajouterReservation($this);
		$this->_chambre->ajouterReservation($this);
		$this->_chambre->getHotel()->ajouterReservation($this);
		$this->_chambre->getPrix();
	}

	public function getDateDebut(){
		return $this->_dateDebut;
	}

	public function setDateDebut(string $dateDebut){
		$this->_dateDebut = $dateDebut;
	}

	public function getDateFin(){
		return $this->_dateFin;
	}

	public function setDateFin(string $adresse){
		$this->_dateFin = $dateFin;
	}

	public function getClient(){
		return $this->_client;
	}

	public function setClient(string $client){
		$this->_client = $client;
	}

	public function getHotel(){
		return $this->_hotel;
	}

	public function setHotel(string $hotel){
		$this->_hotel = $hotel;
	}

	public function getChambre(){
		return $this->_chambre;
	}

	public function setChambre(string $chambre){
		$this->_chambre = $chambre;
	}

	// Méthode pour calculer le prix d'un réservation
	
	public function calculPrix(){
	$datedif = date_diff($this->getDateDebut(),$this->getDateFin())->d;
		$total = $this->_chambre->getPrix()*$datedif;
		return $total;
	}

	// toString

	public function __toString(){
		return "Chambre: ". $this->_chambre->getNumero(). " du ".$this->_dateDebut->format("d-m-Y")." au ". $this->_dateFin->format("d-m-Y");
	}

}
