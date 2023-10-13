<?php 
   require_once '../Models/Model.php';
   
   $name = $_POST['carName'];
   $price = $_POST['UPrice'];
   $color = $_POST['Color'];
   $mileage = $_POST['mileage'];
   $chargingTime = $_POST['chargingTime'];
   $batteryCapacity = $_POST['batteryCapacity'];
   
   $imgUrl= $_FILES['productImg1']['name'];

   $newCar = new ElectricCar($name, $color, $mileage, $imgUrl, $price, $batteryCapacity,$chargingTime);

   $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));

   $electricCarsArray[] = $newCar;

    $fileHandle = fopen('../ElectricCars.txt', 'w');

    fwrite($fileHandle , serialize($electricCarsArray));

    header("Location: ../View/Search.php");
?>