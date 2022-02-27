<?php
$ar_buah = ["p" => 'Pepaya', "a" => 'Apel', "m" => 'Mangga', "j" => 'Jambu'];
echo "<ol>";
foreach($ar_buah as $k => $v){ //k itu buat indeks v iti buat nilai valuenya
    echo "<li> $k - $v </li>";
}
echo "</ol>";
//ngurutin abjad nilainya
sort ($ar_buah);
echo "<hr>";
echo "<ul>";
foreach($ar_buah as $k => $v){ //k itu buat indeks v iti buat nilai valuenya
    echo "<li> $k - $v </li>";
}
echo "</ul>";

//ngurutin 
arsort($ar_buah);
echo "<hr>";
echo "<ol>";
foreach($ar_buah as $k => $v){ //k itu buat indeks v iti buat nilai valuenya
    echo "<li> $k - $v </li>";
}
echo "</ol>";
?>
<!-- ============ -->



<?php
$tim = ['ewin', 'ibnu', 'oki'];
//ilangin nilai dibelakang atau akhir
array_pop($tim);
foreach($tim as $person){
    echo "<br> $person";
}
echo "<br>"
//nambahin nilai dibelakang
?>
<?php
$tim = ['ewin', 'ibnu', 'oki'];
array_push($tim, "ali");
foreach($tim as $person){
    echo "<br> $person";
}
echo "<br>"

?>
<?php
//ilangin nilai diawal 
$tim = ['ewin', 'ibnu', 'oki'];
array_shift($tim);
foreach($tim as $person){
    echo "<br> $person";
}
echo "<br>"

?>
<?php
//nambahin nilai diawal 
$tim = ['ewin', 'ibnu', 'oki'];
array_unshift($tim, "nisa");
foreach($tim as $person){
    echo "<br/> $person";
}
echo "<br>"

?>
