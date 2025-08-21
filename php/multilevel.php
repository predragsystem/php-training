<?php 
class GrandParent{
    protected $name = "Predrag";
    public function sayHello(){
        echo "Hello From grandparent". $this->name. "<br>";
    }
}
class parentClass extends GrandParent{
    protected function sayHi(){
        echo "Hi From Parent". $this->name. "<br>";
    }
    public function getHi(){
        echo $this->sayHi();
    }
}
class childClass extends parentClass{
    public function sayHey(){
        echo "Hey from Child<br>";
    }
}
$obj = new childClass();
$obj->sayHey();
$obj->getHi();
$obj->sayHello();