<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Hitung Biaya Kamar</title>
	<!-- link untuk mengambil assets bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: #333;">

<section>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div style="background-color: #7F99B1; color: #fff" class="card-header">
						<h3>Aplikasi Hitung Biaya kamar</h3>
						<small>&copy; Rizki Ristanto Pratama <a class="text-muted" href="https://github.com/SkinnyCoders/">follow me on <span class="text-white">Github</span></a></small>
					</div>
					<div class="card-body">
						<!-- form ke detail harga -->
						<form action="detail_harga.php" method="POST">
							<div class="form-group">
								<label class="label text-muted">Nama Pelanggan</label>
								<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
							</div>
							<div class="form-group">
								<label class="label text-muted">Alamat</label>
								<textarea class="form-control" name="alamat" placeholder="Masukan Alamat" required></textarea>
							</div>
							<div class="form-group">
								<label class="label text-muted">Periode</label>
								<div class="row">
									<div class="col-md-3">
										<div class="form-check">
										  <input class="form-check-input periode" id="1" type="radio" name="periode" id="tahun" value="tahunan" required>
										  <label class="form-check-label" for="tahun">
										    Tahunan
										  </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-check">
										  <input class="form-check-input periode" id="2" type="radio" name="periode" id="bulan" value="bulanan" required>
										  <label class="form-check-label" for="bulan">
										    Bulanan
										  </label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="label text-muted">Cicilan</label>
								<select name="cicil" class="form-control cicilan" required>
									<option>Pilih Cicilan</option>

								</select>
							</div>
							<div class="form-group">
								<label class="label text-muted">Fasilitas</label>
								<div class="row">
									<div class="col-md-4">
										<div class="form-check">
										  <input class="form-check-input" type="checkbox" name="fasilitas[]" id="baca" value="dispenser">
										  <label class="form-check-label" for="baca">
										    Dispenser
										  </label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-check">
										  <input class="form-check-input" type="checkbox" name="fasilitas[]" id="baca" value="kipas">
										  <label class="form-check-label" for="baca">
										    Kipas Angin
										  </label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-check">
										  <input class="form-check-input" type="checkbox" name="fasilitas[]" id="baca" value="televisi">
										  <label class="form-check-label" for="baca">
										    televisi
										  </label>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<input class="btn btn-primary float-right" type="submit" name="proses" value="Hitung Biaya">
							</div>
						</form>
						<!-- end form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- assets javascript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<!-- script untuk menampilkan data cicilan berdasarkan periode yang dipilih -->
<script>
	$('.periode').on('click', function(){
		var id 		= this.id;
		var html 	= '<option>Pilih Cicil</option>';

		var content1 = '<option value="4">3 Bulan</option><option value="2">6 Bulan</option><option value="1">1 Tahun</option>';
		var content2 = '<option value="3">Mingguan</option><option value="1">Bulanan</option>';

		if (id == 1) {
			html = content1;
		} else if (id == 2) {
			html = content2;
		}
		$('.cicilan').html(html);
	})
</script>
</body>
</html>