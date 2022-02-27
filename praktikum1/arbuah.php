<?php
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu'];
echo $ar_buah[3];
//menghitung jumlah buah
echo "<br>Jumlah buah yaitu ".count($ar_buah);
//cetak seluruh buah
echo "<ol> ";
foreach($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";
//menambahkan buah
$ar_buah [] ='Durian';
//menghapus buah 
unset($ar_buah[1]);
//mengubah nama buah 
$ar_buah[2] = "Manggis";
echo "<ul>";
foreach($ar_buah as $k =>$v){
    echo "<li>$buah index ke- $k adalah $v </li>";
}
echo "</ul>";
?>