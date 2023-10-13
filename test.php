<?php
require_once 'Models/Model.php'; // Include the Car class definition

// Create an array of popular car names
$popularElectricCarNames = ["Yaris Electric", "Vitz Electric", "Corolla Electric", "Camry Electric", "RAV4 Electric", "Prius Electric"];
$popularFuelCarNames = ["Yaris Fuel", "Vitz Fuel", "Corolla Fuel"];

// Create arrays to store electric and fuel cars
$electricCars = [];
$fuelCars = [];

// Add 6 electric cars
for ($i = 0; $i < 6; $i++) {
    $name = $popularElectricCarNames[$i];
    $color = "Red"; // You can set a default color
    $mileage = rand(10000, 50000);
    $imgUrl = ($i + 1) . ".jpg"; // Generate image value from 1.jpg to 6.jpg
    $price = rand(20000, 40000);
    $batteryCapacity = rand(50, 100); // Battery capacity in kWh
    $chargingTime = rand(1, 8); // Charging time in hours

    // Create an ElectricCar object and add it to the electricCars array
    $electricCar = new ElectricCar($name, $color, $mileage, $imgUrl, $price, $batteryCapacity, $chargingTime);
    $electricCars[] = $electricCar;
}

// Add 3 fuel cars
for ($i = 0; $i < 3; $i++) {
    $name = $popularFuelCarNames[$i];
    $color = "Blue"; // You can set a default color
    $mileage = rand(8000, 30000);
    $imgUrl = ($i + 7) . ".jpg"; // Generate image value from 7.jpg to 9.jpg
    $price = rand(15000, 25000);
    $fuelCapacity = rand(30, 60); // Fuel capacity in liters
    $kmPerLiter = rand(10, 20); // Kilometers per liter

    // Create a FuelCar object and add it to the fuelCars array
    $fuelCar = new FuelCar($name, $color, $mileage, $imgUrl, $price, $fuelCapacity, $kmPerLiter);
    $fuelCars[] = $fuelCar;
}

// Serialize and store the arrays in separate files
file_put_contents('ElectricCars.txt', serialize($electricCars));
file_put_contents('FuelCars.txt', serialize($fuelCars));

echo "Cars added successfully!";
?>
