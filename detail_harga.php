<?php 
//cek apakah sudah ditekan submit belum
if (isset($_POST['proses'])) {
	//include file fungsinya 
	require 'function_math.php';

	//deklarasi variable untuk inputannya 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$getPeriode = $_POST['periode'];
	$fasilitas = $_POST['fasilitas'];
	$cicilan = $_POST['cicil'];

	//data harga yang sudah ditentukan
	$array_harga = ['tahunan' => 6500000, 'bulanan' => 800000];

	//get harganya berdasarkan
	$harga = $array_harga[$getPeriode];

	//cetak harga totalnya
	$test = hitung_biaya($harga, $getPeriode, $fasilitas, $cicilan);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Harga</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: #333">
	<section>
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div style="background-color: #7F99B1; color: #fff" class="card-header">
							<h3>Jumlah Biaya</h3>
							<small>Berikut adalah detail jumlah biaya yang harus dibayarkan</small>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<!-- print data yang sudah dikirim -->
								<tr>
									<th>Nama Penyewa</th>
									<td><?=ucwords($nama)?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><?=ucwords($alamat)?></td>
								</tr>
								<tr>
									<th>Total bayar</th>
									<td><?=$cicilan.'x'. number_format($harga, 2,',','.')?></td>
								</tr>
								<tr>
									<th>Jumlah Cicilan</th>
									<td><?=$cicilan?> x Dicicil</td>
								</tr>
								<tr>
									<th>Total Pengeluaran</th>
									<td><?=number_format($test, 2,',','.')?></td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<a class="btn btn-info float-right" href="index.php">Kemabali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>

