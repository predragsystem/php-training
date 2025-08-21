<?php 
class Car{
    public $color;
    public $brand;
    function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
        echo "1";
    }
    public function getBrand(): string{
        return "2. Car Brand is $this->brand";
        
    }
    public function getColor(): string{
        return "3.Car Color is $this->color";
    }
}
$newCar = new Car("BMW","RED");
echo $newCar->getBrand();
echo $newCar->getColor();