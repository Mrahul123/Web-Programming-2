<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATA KULIAH</title>
</head>
<body>
    <div class="col-md-12">
    <h2>Mata Kuliah</h2>
    <Table border="1" class= "table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA </th>
                <th>SKS</th>
                <th>KODE</th>

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