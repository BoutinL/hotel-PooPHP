<h1>Exercice Hotel</h1>
<?php 
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hotel1 = new Hotel("nom_hotel", "adresse_hotel");
echo $hotel1;

$chambre1 = new Chambre(1,true, 2, 340, true);
echo $chambre1."<br/>";

$client1 = new Client("client_nom","client_prenom");
echo $client1."<br/>";

$reservation1 = new Reservation("00-00-0000","11-11-1111");
echo $reservation1;