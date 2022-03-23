<?php
require_once "class_persegipjg.php";

$persegi1= new PersegiPanjang(6,4);
$persegi2 = new PersegiPanjang(10,6);
echo "<br/> Luas Persegi Panjang1 adalah =".$persegi1->getLuas()," cm2" ;
echo "<br/> Keliling Persegi Panjang1 adalah =".$persegi1->getKll(),' cm';
echo "<hr/>";
echo "<br/> Luas Persegi Panjang2 adalah =".$persegi2->getLuas()," cm2" ;
echo "<br/> Keliling Persegi Panjang2 adalah =".$persegi2->getKll(),' cm';

?>