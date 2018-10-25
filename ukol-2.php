<?php
 
 
interface EGeometrickyUtvar {
    
    public function ziskejObvod();
    
    public function ziskejPocetStran();
 
 
 }
 
 
abstract class GeometrickyUtvar implements EGeometrickyUtvar
{
    private $pocetStran;
    public function __construct($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }
    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }
}
class Ctverec extends GeometrickyUtvar
{
    private $a;
    public function __construct($a)
    {
        $this->a = $a;
        parent::__construct(4);
    }
    public function ziskejObvod()
    {
        return $this->a * $this->ziskejPocetStran();
    }
}
class Trojuhelnik extends GeometrickyUtvar
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct(3);
    }
    public function ziskejObvod()
    {
        return $this->a + $this->b + $this->c;
    }
}

 function vypisDetail(EGeometrickyUtvar $objekt) {
    
    
    echo "<h3>" . get_class($objekt) . "</h3>";
    echo "Počet stran " . $objekt->ziskejPocetStran() . "<br>";
    echo "Obvod";
    }
    
$ctverec = new Ctverec(3);
ziskejObvod();

