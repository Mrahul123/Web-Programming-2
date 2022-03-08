<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<h3>
                Belanja Online
			</h3><hr>
			<form method="POST" action="form_belanja.php">
				<div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-6">
                     <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
				</div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Tv"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-4">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                      <input type="submit" class="btn btn-success" name="proses" value="Kirim">
                    </div>
                </div>
			</form>
		</div>
		<div class="col-md-4">
        <div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
				<div class="list-group-item">
                    Kulkas : 3.100.000
				</div>
                <div class="list-group-item">
                    Mesin Cuci : 3.800.000
				</div>
				 <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div><hr>
  
<?php
$Proses = $_POST['proses'];
$nama = $_POST['customer'];
$nama_produk = $_POST['produk'];
$jumlah_barang = $_POST['jumlah'];

if($nama_produk == 'Tv'){
    $harga = 4200000;
}elseif($nama_produk == 'kulkas'){
    $harga = 3100000;
}elseif($nama_produk == 'Mesin Cuci'){
    $harga = 3800000;
}

$total_belanja = $harga * $jumlah_barang;
if(!empty($Proses)){
    echo "Nama Customer : $nama";
    echo "<br/>Produk Pilihan : $nama_produk";
    echo "<br/>Jumlah Beli : $jumlah_barang";
    echo "<br/>Total Belanja : ";
    echo "Rp " .number_format($total_belanja,2,',','.');
}

?>

</body>
</html>
