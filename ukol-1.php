<?php

class Ctverec {
    
   public $delkaStrany;
    
   
   
   public function __construct($delkaStrany) {
    
    
    $this->delkaStrany = $delkaStrany;
    
    
    
    }
    
    
   public function spocitejObsah() 
   
   {
       return $this->delkaStrany * $this->delkaStrany;
       
       
       }
   }    
       
  $malyCtverec = new Ctverec(6);  
  echo "Obsah čtverce o délce strany " . $malyCtverec->delkaStrany . " je " . $malyCtverec->spocitejObsah();