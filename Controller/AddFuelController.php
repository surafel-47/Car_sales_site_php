<?php 
   require_once '../Models/Model.php';
   
   $name = $_POST['carName'];
   $price = $_POST['UPrice'];
   $color = $_POST['Color'];
   $mileage = $_POST['mileage'];
   $kmPerLiter = $_POST['kmPerLiter'];
   $fuelCapacity = $_POST['fuelCapacity'];
   
   $imgUrl= $_FILES['productImg1']['name'];

   $newCar = new FuelCar($name, $color, $mileage, $imgUrl, $price, $fuelCapacity,$kmPerLiter);

   $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));

   $fuelCarsArray[] = $newCar;

    $fileHandle = fopen('../FuelCars.txt', 'w');

    fwrite($fileHandle , serialize($fuelCarsArray));

    header("Location: ../View/Search.php");
?>