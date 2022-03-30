<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>belajar Inheretance dan Encapsulation</title>
</head>
<body>
    <h1 class="h1 text-center">BANK</h1>
<?php
class Account{
    public $nomor;
    public $saldo;

    public function __construct($nomor,$saldo){
        $this -> nomor =$nomor;
        $this -> saldo =$saldo;
    }
    public function deposit($uang){
        $this -> saldo =  $this -> saldo + $uang;
    }
    public function withdraw($uang){
        $this -> saldo =  $this -> saldo - $uang;
    }
    public function cetak(){
        echo "<br/>Nomor Account :".$this->nomor;
        echo "<br/>Saldo :".$this->saldo;
    }
    public function getSaldo(){
        return $this->saldo;
        
    }

}
class Accountbank extends Account{
    public $cstmr;
    
    public function __construct($nomor,$saldo,$nama){
        parent::__construct($nomor,$saldo);
        $this-> nama = $nama;
    }
    public function tf($rek_tujuan,$uang){
        $rek_tujuan->deposit($uang);
        $this->withdraw($uang);
        
    }
    public function cetak(){
        parent::cetak();
        echo "<br/>Pemilik :".$this -> nama;
    }
    
}
$name1 = new Accountbank("C001", " 6000000", " Ahmad");
$name2 = new Accountbank("C002", " 5350000", " Budi");
$name3= new Accountbank("C003", " 2500000", " Kurniawan");

$ar_nama = [$name1,$name2,$name3];

?>

<table class="table table-striped table-bordered text-center">
    <thead>
        <tr>
            <th>No</th><th>No. Account</th><th>Pemilik</th><th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_nama as $obj){
        ?>    
            <tr>
                <td><?= $nomor?></td>
                <td><?=$obj->nomor?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->getSaldo()?></td>
            
            </tr>
            
        <?php
            $nomor++;    
            }
        ?>
    </tbody>
</table>
<?php
$name1->deposit(1000000);
echo "Ahmad nabung 1.000.000";
$name1->cetak();
$name2->withdraw(2500000);
echo "<hr>Budi tarik uang 2.500.000";
$name2-> cetak();

?>

</body>
</html>
