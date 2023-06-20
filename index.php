<h1>Exercice Hotel</h1>
<?php 
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

// Hotel
$hotel0 = new Hotel("nom_hotel", "adresse_hotel");
$hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel("Regent **** Paris", "75000 Paris");

// Chambres
$chambre1 = new Chambre(1, true, 1, 80, false, $hotel1);
$chambre2 = new Chambre(2, false, 2, 120, false, $hotel1);
$chambre3 = new Chambre(3, true, 3, 140, true, $hotel1);
$chambre4 = new Chambre(3, false, 4, 160, true, $hotel1);

$chambre5 = new Chambre(1, true, 1, 80, false, $hotel2);
$chambre6 = new Chambre(2, false, 2, 120, false, $hotel2);
$chambre7 = new Chambre(3, true, 3, 140, true, $hotel2);
$chambre8 = new Chambre(3, false, 4, 160, true, $hotel2);

// Clients
$client1 = new Client("Murmann","Micka");
$client2 = new Client("Boutin","Loïc");

// Reservations
$reservation1 = new Reservation("11-03-2021", "15-03-2021", $client1, $chambre1);
$reservation2 = new Reservation("01-04-2021", "17-04-2021", $client2, $chambre1);

// A FAIRE 
// Hotel: Afficher ses infos (nom/adresse, nombre de chambres total/réservés/disponibles)
// Réservation: Afficher le nom de l'hotel ainsi que ses réservations(nom/prénom client, numéro chambre, dates), préciser si aucune réservation.
// Client: afficher ses infos(nom/prenom) le nom de l'hotel, sa chambre avec le nombre de lits, le prix, la wifi ainsi que les dates.

echo $hotel1;
echo $chambre1->getNumero();
