<?php
class Matakuliah_model extends CI_model{
    public  $nama, $sks, $kode;

    public function getAll(){
        $query = $this ->db->get('matakuliah');
        return $query ->result();
    }
}
?>