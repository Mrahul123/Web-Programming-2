<?php
class Manusia{
    //property
    var $nama;
    var $warna;
    //method
    function tampilan_nama(){
        return "Nama saya adalah Muhamad Rahul Sayyid";

    }
    function warna_kulit(){
        return "<br/>Kulit Saya Coklat Sawo";
    }
}
//object
$manusia = new Manusia();
echo $manusia-> tampilan_nama();
echo $manusia-> warna_kulit();

?>