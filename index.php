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
$chambre4 = new Chambre(4, true, 4, 160, true, $hotel1);

$chambre5 = new Chambre(1, false, 1, 80, false, $hotel2);
$chambre6 = new Chambre(2, false, 2, 120, false, $hotel2);
$chambre7 = new Chambre(3, false, 3, 140, true, $hotel2);
$chambre8 = new Chambre(4, false, 4, 160, true, $hotel2);

// Clients
$client1 = new Client("Murmann","Micka");
$client2 = new Client("Boutin","Loïc");

// Reservations
$reservation1 = new Reservation("11-03-2021", "15-03-2021", $client1, $chambre1);
$reservation2 = new Reservation("01-04-2021", "17-04-2021", $client1, $chambre3);
$reservation3 = new Reservation("21-08-2021", "06-09-2021", $client2, $chambre4);

// Afficher tableau

echo $hotel1 -> listingStats();

echo $hotel1;

echo $client1 -> afficherReservationsClient();

echo $hotel1 -> afficherStatutsChambre();

