<?php
function nama(){
    $nama ="Muhamad Rahul Sayyid";
    echo "Nama Saya adalah ".$nama;
};

function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "SI10";
    echo "<br/>Umur Saya skarang adlah $umur <br/> Saya kelas $kelas";
};
nama();
umur_kelas(2003);

?>