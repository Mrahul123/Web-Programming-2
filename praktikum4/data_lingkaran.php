<?php
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah =".Lingkaran::PHI;

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(6);
echo "<br/>";

echo "<br/> Luas Lingkaran 1 adalah =".$lingkar1->getluas();
echo "<br/> Luas Lingkaran 2 adalah =".$lingkar2->getluas();
echo '<br/>';
echo "<br/> Keliling Lingkaran 1 adalah =".$lingkar1->getkll();
echo "<br/> keliling Lingkaran 2 adalah =".$lingkar2->getkll();



?>