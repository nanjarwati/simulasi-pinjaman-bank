<?php 
class pinjaman {
	public $properti = 0.007;
	public $mobil = 0.006;
	public $kerja = 0.005;

	
	function kendaraan($p,$u,$w) {

		$pokok =($p-$u)/$w;
		$bunga =($p-$u) * $this->mobil;
		$total = $pokok + $bunga;
		return $total;
	}

	function rumah($p,$u,$w) {

		$pokok =($p-$u)/$w;
		$bunga =($p-$u) * $this->properti;
		$total = $pokok + $bunga;
		return $total;
	}

	

	function investasi($p,$u,$w) {

		$pokok =($p-$u)/$w;
		$bunga =($p-$u) * $this->kerja;
		$total = $pokok + $bunga;
		return $total;
	}

	

}



 ?>