<?php 
class BMI{
    public $berat;
    public $tinggi;

    function __construct($berat,$tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function nilai(){
        return $this->berat / (($this->tinggi/100)**2);
    }
    public function status(){
        if($this->nilai() < 18.5){
            echo 'Kekurangan Berat Badan';
        }else if($this->nilai() >= 18.5 && $this->nilai() <= 24.9){
            echo 'Normal(Ideal)';
        }else if($this->nilai() >= 25.0 && $this->nilai() <= 29.9){
            echo 'Kelebihan berat badan';
        }else if($this->nilai() > 30.0){
            echo 'Kegemukan(Obesitas)';
        }else{
            echo 'Tidak termasuk kategori';
        }
    }
}
?>