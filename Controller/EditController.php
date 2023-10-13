<?php
require_once '../Models/Model.php';

$name = $_POST['carName'];
$price = $_POST['UPrice'];
$color = $_POST['Color'];
$mileage = $_POST['mileage'];
$type = $_POST['type'];


if ($type == "Electric") {
    $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));
    foreach ($electricCarsArray as $car) {
        if ($car->getName() == $name) {

            $car->setPrice($price);
            $car->setColor($color);
            $car->setMileage($mileage);
            
            $fileHandle = fopen('../ElectricCars.txt', 'w');
            fwrite($fileHandle, serialize($electricCarsArray));
            header("Location: ../View/search.php");
            break;
        }
    }

} else {
    $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));
    foreach ($fuelCarsArray as $car) {
        if ($car->getName() == $name) {

            $car->setPrice($price);
            $car->setColor($color);
            $car->setMileage($mileage);
            
            $fileHandle = fopen('../FuelCars.txt', 'w');
            fwrite($fileHandle, serialize($fuelCarsArray));
            header("Location: ../View/search.php");
            break;
        }
    }
}
