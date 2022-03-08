<h3>Data Nilai:</h3>
<?php
$proses = $_POST['proses'];
$nama_siswa= $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilaiUts = $_POST['nilai_uts'];
$nilaiUas = $_POST['nilai_uas'];
$nilaiTugas = $_POST['nilai_tugas'];
$total = $nilaiUts + $nilaiUas + $nilaiTugas;
$alphabet = $total/3;

if($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";

}else{
    $lulus = "Selamat Anda Lulus";
}if($alphabet >= 85){
    $grade ="A";
}elseif($alphabet >= 70){
    $grade ="B";
}elseif($alphabet >= 56){
    $grade ="C";
}elseif($alphabet >= 36){
    $grade ="D";
}elseif($alphabet >= 10){
    $grade ="E";
}else{
    $grade = "I (tidak ada nilai)";
}
if(!empty($proses)){

echo "Data telah di".$proses;
echo "<br/>Nama :".$nama_siswa;
echo "<br/>Mata Kuliah:".$mata_kuliah;
echo "<br/>Nilai UAS :".$nilaiUts;
echo "<br/>Nilai UAS :".$nilaiUas;
echo "<br/>Nilai Tugas:".$nilaiTugas;
echo "<br/>Grade:".$grade;
echo "<br/>Keterangan: $lulus";
}
?>