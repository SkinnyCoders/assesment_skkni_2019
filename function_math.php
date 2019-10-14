<?php 

/**
 * { fungsi untuk menghitung jumalah biaya yang harus bibayarkan }
 *
 * @param      integer  $total      The total
 * @param      string   $periode    The periode
 * @param      string   $fasilitas  The fasilitas
 * @param      integer  $cicil      The cicil
 *
 * @return     integer  ( angka total dari jumlah yang harus dibayarkan )
 */
function hitung_biaya($total, $periode, $fasilitas, $cicil){

	//get total without fasility
	switch ($periode) {
		//cek periodenya apa
		//jika periodenya tahunan
		case 'tahunan':
			//cek cicilanya berapa kali
			if ($cicil == 4) {
				$countTotal = $total/4;
			}elseif ($cicil == 2) {
				$countTotal = $total/2;
			}elseif ($cicil == 1) {
				$countTotal = $total;
			}
			break;
		//jika periodenya bulanan
		case 'bulanan':
			//cek cicilannya berapa kali
			if ($cicil == 3) {
				$countTotal = $total/3;
			}elseif ($cicil == 1) {
				$countTotat = $total;
			}
			break;
	}

	//jika dengan fasilitas dan fasilitas ada isinya
	//$fasilitas dalam array
	if (!empty($fasilitas)) {
		//cek periodenya dulu
		$totalFasilitas = !empty($totalFasilitas)?$totalFasilitas:0;
		switch ($periode) {
			case 'tahunan':
			$kosong = 0;
				//cek fasilitasnya apa
				foreach ($fasilitas as $data) {
					if ($data == 'dispenser') {
						//jika dispenser dan tahunan
						$totalFasilitas = $kosong+240000;
					}elseif ($data == 'kipas') {
						//jika kipas dan tahunan
						$totalFasilitas = $totalFasilitas+15000;
					}elseif ($data == 'televisi') {
						//jika tv dan tahunan
						$totalFasilitas = $totalFasilitas+272000;
					}
				}
				break;

			case 'bulanan':
				//cek fasilitasnya apa
				foreach ($fasilitas as $data) {
					if ($data == 'dispenser') {
						//jika dispenser dan bulanan
						$totalFasilitas = $kosong+30000;
					}elseif ($data == 'kipas') {
						//jika kipas dan bulanan
						$totalFasilitas = $totalFasilitas+5000;
					}elseif ($data == 'televisi') {
						//jika tv dan bulanan
						$totalFasilitas = $totalFasilitas+272000;
					}
				}
				break;
		}

		//total biaya ditambah dengan biaya fasilitas
		$countTotal = $countTotal+$totalFasilitas;
	}
	//total biaya
	return $countTotal;

}

 ?>