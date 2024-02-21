<?php

require('Vehicle.php');

$vitz = new Vehicle();

// $vitz->move();
echo "<br />";
$value = $vitz->makeSound();

echo $value . "something";
echo "<br />";
$vitz->wipe();
echo "<br />";
Vehicle::move();



