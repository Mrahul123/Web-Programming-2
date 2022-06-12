<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATA KULIAH</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php 
$username =$this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username </h2>";
}
?>
<body>
    <div class="col-md-12">
    <h2 class="text-center">Mata Kuliah</h2>
    <Table border="1" class= "table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA </th>
                <th>SKS</th>
                <th>KODE</th>
                <th>ACTION</th>


            </tr>
            <tbody>
                <?php
                $nomor =1;
                foreach($matakuliah as $mk){
                ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $mk->nama?></td>
                    <td><?php echo $mk->sks?></td>
                    <td><?php echo $mk->kode?></td>
                    <td>
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$mk->id") ?> 
                    class="btn btn-success btn-lg active" >Update</a>
                    &nbsp; 
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$mk->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusMatakuliah('Apakah Anda yakin ingin menghapus matakuliah yang bernama <?php echo $mk-> nama ?> ?')" >Delete</a>
                </td>

                </tr>
                <?php
                $nomor++;
                }
                ?>
            
            </tbody>
        </thead>
    </Table>
    <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>