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

	// toString

	public function __toString(){
		return $this->_dateDebut->format("d-m-Y")." ".$this->_dateFin->format("d-m-Y")."<br/>";
	}

}