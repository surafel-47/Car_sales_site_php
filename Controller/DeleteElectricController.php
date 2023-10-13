<?php 
    require_once '../Models/Model.php';

    $name = $_GET['carName'];

        $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));
        $filteredElectricCarsArray = array_filter($electricCarsArray, function ($car) use ($name) {
            return $car->getName() !== $name;
        });
        $fileHandle = fopen('../ElectricCars.txt', 'w');
        fwrite($fileHandle, serialize($filteredElectricCarsArray));
    

    header("Location: ../View/Search.php");
?>