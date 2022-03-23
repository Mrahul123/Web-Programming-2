<?php
//class lingkaran
class Lingkaran{
    //properti
    private $jari;
    const PHI = 3.14;
    //method
    function __construct($r)
    {
        $this -> jari =$r;
    }
    //method mengihtung luas
    function getluas(){
        return self::PHI * $this -> jari *$this ->jari;
    }
    function getkll(){
        return 2 * self::PHI * $this -> jari;
    }

}
?>