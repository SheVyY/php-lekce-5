<?php

interface TrojrozmernyObrazec {
    
    public function ziskejObjem();
    
    public function ziskejPovrch();
    
    }
    
 class Kvadr implements TrojrozmernyObrazec {
     
     private $a;
     private $b;
     private $c;
     
    public function __construct($a,$b,$c) {
        
        $this->a =$a;
        $this->b =$b;
        $this->c =$c;
        
        }
        
    public function ziskejObjem() {
        
        return round($this->a * $this->b * $this->c, 2);
        
        }
        
    public function ziskejPovrch() {
        
        return round(($this->a * $this->b + $this->a * $this->c + $this->b * $this->c) * 2, 2);
        
        }
        
    }
        
    class Krychle implements TrojrozmernyObrazec {
     
     private $a;
     
    public function __construct($a) {
        
        $this->a =$a;
        
        }
        
    public function ziskejObjem() {
        
        return round(pow($this->a, 3), 2);
        
        }
        
    public function ziskejPovrch() {
        
        return round($this->a * $this->a * 6 , 2);
        
        }    
        
    }
    
    class Koule implements TrojrozmernyObrazec {
     
     private $polomer;
     
    public function __construct($polomer) {
        
        $this->polomer =$polomer;
        
        }
        
    public function ziskejObjem() {
        
        return round(4/3 * pi() * pow($this->polomer, 3) , 2);
        
        }
        
    public function ziskejPovrch() {
        
        return round(pi() * pow($this->polomer, 2) * 4 , 2);
        
        }    
        
    }
    
    class Jehlan implements TrojrozmernyObrazec {
     
     private $a;
     private $telesova_vyska;
     
     
    public function __construct($a,$telesova_vyska) {
        
        $this->a =$a;
        $this->telesova_vyska =$telesova_vyska;
        
        }
        
    public function ziskejObjem() {
        
        $obsah_podstavy = pow($this->a, 2);
        $celkovy_objem = round(($obsah_podstavy * $this->telesova_vyska) * 1/3 , 2);
        return $celkovy_objem;
        
        }
        
    public function ziskejPovrch() {
        
        $obsah_podstavy = pow($this->a, 2);
        $vyska_steny = pow($this->telesova_vyska, 2) + (pow($this->a , 2) / 4);
        $vyska_steny = sqrt($vyska_steny);
        $obsah_plaste = ($this->a * $vyska_steny) * 2;
        $celkovy_obsah = round($obsah_podstavy + $obsah_plaste, 2);
        return $celkovy_obsah;
        
        }    
        
    }
    
    
    function vypisDetail(TrojrozmernyObrazec $utvar) {
        
        echo "<h2>" . get_class($utvar) . "</h2>";
        echo "Objem " . strtolower(get_class($utvar)) . " je: " . $utvar->ziskejObjem() . " cm3" . "<br>";
        echo "Povrch  " . strtolower(get_class($utvar)) . " je: " . $utvar->ziskejPovrch() . " cm2";
  
  }
  
  $kvadr = new Kvadr(23,10,40);
  vypisDetail($kvadr);
  $krychle = new Krychle(21.93);
  vypisDetail($krychle);
  $koule = new Koule(35.1);
  vypisDetail($koule);
  $jehlan = new Jehlan(9.9,5.23);
  vypisDetail($jehlan);
