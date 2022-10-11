<?php

require __DIR__ . '/Bicycle.php';
require __DIR__ . '/Cars.php';

$bike = new Bicycle('Blue');
// $bike->setColor('Blue');
$bike->setCurrentSpeed(15);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $bike->brake(). '<br><br>';


// Moving car

$blueCar = new Cars('blue', 5, "gazole");
$blueCar->setCurrentSpeed(0);
$blueCar->setEnergyLevel(50);
echo '<br> La voiture ' . $blueCar->getColor() . ' démarre !' . '<br> <br>';
echo $blueCar->start();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $blueCar->forward();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br><br>';


$redCar = new Cars('red', 5, "Benzin");
$redCar->setCurrentSpeed(0);
$redCar->setEnergyLevel(90);
echo '<br> La voiture ' . $redCar->getColor() . ' démarre !' . '<br> <br>';
echo $redCar->start();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $redCar->forward();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $redCar->brake();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br><br>';
