<?php 
require_once 'pasien.php';
require_once 'bmi.php';

class BMIPasien extends Pasien{
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($bmi, $pasien){
        $this->bmi = $bmi;
        $this->pasien = $pasien;
    }
}