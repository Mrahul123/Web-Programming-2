<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h2>Daftar Dosen</h2>
    <Table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIDN</th>
                <th>PENDIDIKAN</th>
                <th>ACTION</th>


            </tr>
            <tbody>
                <?php
                $nomor =1;
                foreach($dosen as $dsn){
                ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $dsn->nama ?></td>
                    <td><?php echo $dsn->nidn ?></td>
                    <td><?php echo $dsn->pendidikan ?></td>
                    <td>
                        <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a>
                    </td>

                </tr>
                <?php
                $nomor++;
                }
                ?>
            
            </tbody>
        </thead>
    </Table>
    </div>
</body>
</html>