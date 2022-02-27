<?php
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI *$jari *$jari;
$kll = 2 * PHI * $jari;

echo "Luas Lingkaran dengan jari-jari $jari = $luas";
echo "<br>Kelilingnya : $kll";

?>
<br>
<?php
echo "Nama Databasenya :" .DBNAME;
echo "<br>Lokasi Databasenya :" .DBSERVER;

?>