<?php 
if(isset($_POST['proses'])) {
	include "hitungpinjaman.php";
	
	$plafon = $_POST['plafon'];
	$uang = $_POST['uang'];
	$waktu = $_POST['waktu'];
	$pilih = $_POST['pilih'];

switch ($pilih) {
			case 'prop':
	$pinjam = new pinjaman();
	$plafon = $_POST['plafon'];
	$uang = $_POST['uang'];
	$waktu = $_POST['waktu'];
	$hasilpinjam = $pinjam->rumah($plafon,$uang,$waktu);
			break;
			case 'car':
	$pinjam = new pinjaman();
	$plafon = $_POST['plafon'];
	$uang = $_POST['uang'];
	$waktu = $_POST['waktu'];
	$hasilpinjam = $pinjam->kendaraan($plafon,$uang,$waktu);
			break;
			case 'invest':
	$pinjam = new pinjaman();
	$plafon = $_POST['plafon'];
	$uang = $_POST['uang'];
	$waktu = $_POST['waktu'];
	$hasilpinjam = $pinjam->investasi($plafon,$uang,$waktu);
			break;
					
		}

	
	
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Simulasi Pinjaman sektio ririn</title>
 </head>
 <body>
 	<b>SIMULASI PINJAMAN</b>
 <form name="myform" action="" method="post">
 	<br>pembiyaan
 	<select name="pilih">
 		<option value="prop">Rumah,Ruko,Apartement</option>
 		<option value="car">Mobil</option>
 		<option value="invest">Modal Kerja, Investasi</option>
 	</select>
 	<br><br>
 	Plafon
 	<br><input type="text" name="plafon" value="<?php if(isset($_POST['proses'])) echo $plafon ?>">
 	<br>Uang Muka(Min 20%)
 	<br><input type="text" name="uang" value="<?php if(isset($_POST['proses'])) echo $uang ?>">
 	<br>Jangka Waktu (Bulan)
 	<br><input type="text" name="waktu" value="<?php if(isset($_POST['proses'])) echo $waktu ?>">
 	
 	<br><button type="submit" name="proses">Hitung</button>

 </form>

<?php 
if(isset($_POST['proses'])) {

	echo "Uang Muka = $uang <br>";   
	echo "Nilai Pembiayaan Bank = "; echo $plafon-$uang;
	echo "<br> Angsuran/Bulan = $hasilpinjam";
	
}

 ?>


 </body>
 </html>