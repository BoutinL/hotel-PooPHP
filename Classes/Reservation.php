<?php

Class Reservation{

	private DateTime $_dateDebut;
	private DateTime $_dateFin;
	private Client $_client;
	private Hotel $_hotel;

	public function __construct(string $dateDebut, string $dateFin, Client $client, Hotel $hotel){

		$this->_dateDebut = new DateTime($dateDebut);
		$this->_dateFin = new DateTime($dateFin);
		$this->_client = $client;
		$this->_hotel = $hotel;
		$this->_client->ajouterReservation($this);
		$this->_hotel->ajouterReservation($this);

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


	// toString

	public function __toString(){
		return "Réservations de l'hotel: ".$this->getReservations()->gethotel()->getNom()."<br/>".$this->getReservations()->getClient()->getNom()." ".$this->listingReservations();
	}

}
