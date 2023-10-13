<?php
abstract class Car {
    protected $name;
    protected $color;
    protected $mileage;
    protected $imgUrl;
    protected $price;

    public function __construct($name, $color, $mileage, $imgUrl, $price) {
        $this->name = $name;
        $this->color = $color;
        $this->mileage = $mileage;
        $this->imgUrl = $imgUrl;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public function getMileage() {
        return $this->mileage;
    }

    public function getImgUrl() {
        return $this->imgUrl;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setMileage($mileage) {
        $this->mileage = $mileage;
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;
    private $chargingTime;

    public function __construct($name, $color, $mileage, $imgUrl, $price, $batteryCapacity, $chargingTime) {
        parent::__construct($name, $color, $mileage, $imgUrl, $price);
        $this->batteryCapacity = $batteryCapacity;
        $this->chargingTime = $chargingTime;
    }

    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function getChargingTime() {
        return $this->chargingTime;
    }
}

class FuelCar extends Car {
    private $fuelCapacity;
    private $kmPerLiter;

    public function __construct($name, $color, $mileage, $imgUrl, $price, $fuelCapacity, $kmPerLiter) {
        parent::__construct($name, $color, $mileage, $imgUrl, $price);
        $this->fuelCapacity = $fuelCapacity;
        $this->kmPerLiter = $kmPerLiter;
    }

    public function getFuelCapacity() {
        return $this->fuelCapacity;
    }

    public function getKmPerLiter() {
        return $this->kmPerLiter;
    }
}
?>
