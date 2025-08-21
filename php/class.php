<?php 
//Class Creation
$mgm = new Student();
echo $mgm->getName("Somesh");
class Student{
    //Method Declaration
    private  function setName($name){
        return $name;
    }

    public function getName($name){
        return $this->setName($name);
    }
}


//Object Creation


