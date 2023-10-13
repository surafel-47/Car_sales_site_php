<?php 
    require_once '../Models/Model.php';

    $name = $_GET['carName'];

        $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));
        $filteredfuelCarsArray = array_filter($fuelCarsArray, function ($car) use ($name) {
            return $car->getName() !== $name;
        });
        $fileHandle = fopen('../FuelCars.txt', 'w');
        fwrite($fileHandle, serialize($filteredfuelCarsArray));
    

    header("Location: ../View/Search.php");
?>