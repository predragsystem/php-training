<?php

//Public , Private, Protected
// Public : Access from Anywhere
// Private : Access only inside the class
// Protected : inside the class and sub class
class User{
    public $name;
    /*public function __construct($name){
        $this->name = $name;
    }*/
    public function getName($name){
        echo $name;
    }
}

$user = new User();
//print_r($user );
//echo $user->getName( "Predrg");


class bankAccount{
    private $balance = 0;
    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withDraw($amount){
        $this->balance -= $amount;
    }

    public function getBalnce(){
        return $this->getAccountDetails();
    }
    private function getAccountDetails(){
        $deatils = "{
        'Name' : 'ABC', 
        'Account':458565555,
        'Balance': $this->balance
        }";
        return $deatils;
    }
}

$bank = new bankAccount();
$bank->deposit(3000);
$bank->withDraw(1000);
echo $bank->getBalnce();