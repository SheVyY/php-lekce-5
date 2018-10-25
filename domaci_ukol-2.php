<?php


//Předělat

class Uzivatel {
    
    private $jmeno;
    private $heslo;
    
    public function __construct($jmeno, $heslo) {
        
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
        
        }
        
    public function overeni() {
        
        if($this->jmeno == $this->heslo) {
            
            return true;
            
            } else {
                
                return false;
                
                }
            }
        
    public function ziskejJmeno() {
        
        return $this->jmeno;
        
        }
    }
        
  
  class Prihlasovani extends Uzivatel {
     
     private $prihlaseniUzivatele;
     
     public function prihlas() {
         
         
         }
      }
      
$uzivatel = new Uzivatel("marek", "marek");
echo $uzivatel;
