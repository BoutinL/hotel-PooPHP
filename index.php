<h1>Exercice Hotel</h1>
<?php 
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hotel0 = new Hotel("nom_hotel", "adresse_hotel");
$hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel("Regent **** Paris", "75000 Paris");
echo $hotel1;

$chambre1 = new Chambre(1, true, 1, 80, false);
$chambre2 = new Chambre(2, false, 2, 120, false);
$chambre3 = new Chambre(3, true, 3, 140, true);
$chambre3 = new Chambre(3, false, 4, 160, true);
echo $chambre1."<br/>";

$client1 = new Client("Murmann","Micka");
echo $client1."<br/>";

$reservation1 = new Reservation("11-03-2021", "15-03-2021");
$reservation2 = new Reservation("01-04-2021", "17-04-2021");
echo $reservation1;