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

	// Méthode qui ajoute une chambre à son hotel

	public function ajouterChambre(Chambre $chambre){
		array_push($this->_chambres, $chambre);
	}

	public function ajouterReservation(Reservation $reservation){
		array_push($this->_reservations, $reservation);
	}

	// méthode pour calculer le nombre de chambres occupée dans un hotel

	public function nbrChambreIndispo(){
		$nbrChambreIndispo = 0;
		foreach($this->_reservations as $reservation){
			if($reservation -> getChambre() -> getDisponibilite() == true){
				$nbrChambreIndispo++;
			}
		}
		return $nbrChambreIndispo;
	}

	// méthode pour calculer le nombre de chambres dispo dans un hotel

	public function nbrChambreDispo(){
		$nbrChambre= count($this->_chambres);
		$nbrChambreDispo = $nbrChambre - $this->nbrChambreIndispo();
		return $nbrChambreDispo;
	}

	// méthode pour afficher les stats d'un hotel

	public function listingStats() : string
	{
		return $this->_nom."<br/>".$this->_adresse."<br/>Nombre de chambres: ".count($this->_chambres)."<br/>Nombre de chambres réservées :".$this->nbrChambreIndispo()."<br/>Nombre de chambres dispo: ".$this->nbrChambreDispo()."<br/>-------------------------<br/>";
	}

	// Méthode pour afficher le statut des chambres d'un hotel

	public function afficherStatutsChambre(){
		echo "Status des chambres de ".$this->getNom();
		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>CHAMBRE</th><th>PRIX</th><th>WIFI</th><th>ETAT</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		foreach($this->_chambres as $chambre){
			$chambreEtat = ($chambre->getDisponibilite()==true) ? 'DISPONIBLE' : 'RESERVEE';
			$wifi = ($chambre->getDisponibilite()==true) ? 'OUI' : 'NON';
			echo "<tr><td>Chambre ".$chambre->getNumero()."</td><td>".$chambre->getPrix()." €</td><td>".$wifi."</td><td>".$chambreEtat."</td></tr>";
		}
		echo "</tbody>";
		echo "<table/>";
	}

	// toString

	private function listingReservations() : string
	{
		$result = "";
		foreach($this->_reservations as $reservation){
			$result .=$reservation->getClient()->getNom()." ".$reservation->getClient()->getPrenom()." - ".$reservation ."<br/>";
		}
		$result .= "-------------------------<br/>";
		return $result;
	} 

	public function __toString(){
		return "Réservations de l'hotel: ".$this->_nom."<br>".count($this->_reservations)." RESERVATIONS<br/>".$this->listingReservations();
	}
	
}