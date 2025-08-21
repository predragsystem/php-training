<?php 
class Car{
    public $color;
    public $brand;
    public function getBrand(): string{
        return "Car Brand is $this->brand";
    }

    public function getColor(): string{
        return "Car Color is $this->color";
    }
}

$newCar = new Car();
$newCar->brand = "TATA";
$newCar->color = "Red";
echo $newCar->getBrand();
//echo $newCar->getColor();