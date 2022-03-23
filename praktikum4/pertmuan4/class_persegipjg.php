<?php
class PersegiPanjang{
   public $panjang;
   public $lebar;

   function __construct($pjg,$lbr){
       $this -> panjang = $pjg;
       $this -> lebar= $lbr;
   }
   function getLuas(){
       return $this -> panjang * $this->lebar;
   }
   function getKll(){
    return ($this -> panjang + $this->lebar) * 2;
   }
}
?>