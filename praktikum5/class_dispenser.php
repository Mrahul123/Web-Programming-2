<?php
class Dispenser{
    public $namaMinuman;
    const volumeGelas = 250;
    protected $hargaSegelas;
    protected $volume;     
    public function isi($vol){
        return $this -> volume = $vol;
    }
    
    public function harga($hrg){
        return $this -> hargaSegelas = $hrg;
    }
    public function volGelas(){
        return self::volumeGelas;
    }
    public function getTotal(){
        return  $this -> volume - self::volumeGelas ;
    
    }

}
$minum= new Dispenser();
echo "Nama Minuman ".$minum -> namaMinuman = "aqua" ;
echo "<hr/>";
echo "Volume Galon adalah ".$minum -> isi(1000). ' Ml' ;
echo '<br/>';
echo "Harga segelasnya adalah ". $minum -> volGelas().' Ml';
echo '<br/>';
echo "Andi beli air satu gelas yang volumenya ". $minum -> volGelas().' Ml';
echo "<br/>";
echo "Hasil volume galon sekarang adalah ".$minum -> getTotal()." Ml";



?>