<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($nama,$warna){
        $this -> name = $nama;
        $this -> color = $warna;

    }
    public function intro(){
     echo "<br/>Nama Aku adalah {$this -> name} dan warna aku adalah{$this -> color}";
    }
}
class Strawberry extends Fruit{
    public  function massage(){
        echo "Aku adalah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry", " Merah");
$buah -> massage();
$buah -> intro();
?>