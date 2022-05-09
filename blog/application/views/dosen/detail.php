<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h2>Detail Dosen</h2>
    <Table border="1" class= "table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>GENDER</th>
                <th>NIDN</th>
                <th>PENDIDIKAN</th>

            </tr>
            <tbody>
                
                <tr>
                    <td><?php echo $dozen ->id ?></td>
                    <td><?php echo $dozen ->nama?></td>
                    <td><?php echo $dozen ->tmp_lahir ?></td>
                    <td><?php echo $dozen ->tgl_lahir ?></td>
                    <td><?php echo $dozen ->gender ?></td>
                    <td><?php echo $dozen ->nidn ?></td>
                    <td><?php echo $dozen ->pendidikan ?></td>
                </tr>
               
            </tbody>
        </thead>
    </Table>
    </div>
</body>
</html>