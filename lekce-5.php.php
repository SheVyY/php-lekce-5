<?php

class Auto {
    
    public $rokVyroby;
    
    
    public function __construct($rokVyroby)
    {
        $this->rokVyroby = $rokVyroby;
        
        }
    
    
    
    public function spocitejVek()
    
    {
        
    return date("Y") - $this->rokVyroby;
        
        }
        
     public function nastavVek($novyVek)
     {
        $this->rokVyroby = $novyVek; 
         
         
     }
        
}

$skodaFabia = new Auto(2001);
echo $skodaFabia->spocitejVek();










exit;

/*

$skodaFabia = [

    "rokVyroby" => 2001,
    "barva" => "bílá"
    
];


$josef = [
    "rokNarozeni" => 1985
]

function spocitejVek($auto) {
    
    return date("Y") - $auto["rokVyroby"];
    
    
}

echo spocitejVek($skodaFabia);
echo spocitejVek($josef);
*/