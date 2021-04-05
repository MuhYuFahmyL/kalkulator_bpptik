<?php
	$bilangan_satu = $bilangan_dua = 0;
	$hasil = 0;

	function penjumlahan($satu,$dua){
		$hasil = $satu + $dua;
		echo '<input type="text" value="'.$hasil.'" class="bilr" readonly="true">';
	}
	function pengurangan($satu,$dua){
		$hasil = $satu - $dua;
		echo '<input type="text" value="'.$hasil.'" class="bilr" readonly="true">';
	}
	function perkalian($satu,$dua){
		$hasil = $satu * $dua;
		echo '<input type="text" value="'.$hasil.'" class="bilr" readonly="true">';
	}
	function pembagian($satu,$dua){
		$hasil = $satu / $dua;
		echo '<input type="text" value="'.$hasil.'" class="bilr" readonly="true">';
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tugas 6 - Muhammad Yusri Fahmy Lubis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>			
			<input type="number" name="bilangan_satu" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="number" name="bilangan_dua" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<input type="submit" name="tombol1" value="+" class="tombol1">					
			<input type="submit" name="tombol2" value="-" class="tombol2">					
			<input type="submit" name="tombol3" value="X" class="tombol3">					
			<input type="submit" name="tombol4" value="/" class="tombol4">					
		</form>
		<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				    $bilangan_satu    = $_POST["bilangan_satu"];
				    $bilangan_dua     = $_POST["bilangan_dua"];
				  	if(!empty($bilangan_satu) && !empty($bilangan_dua)){
				  		if (isset($_POST['tombol1'])) {
					        penjumlahan($bilangan_satu,$bilangan_dua);
					    }
					    elseif (isset($_POST['tombol2'])) {
					        pengurangan($bilangan_satu,$bilangan_dua);
					    }
					    elseif (isset($_POST['tombol3'])) {
					        perkalian($bilangan_satu,$bilangan_dua);
					    }
					    elseif (isset($_POST['tombol4'])) {
					        pembagian($bilangan_satu,$bilangan_dua);
					    }else{
					    	echo '<input type="text" value="0" class="bilr" readonly="true">';
						}
				  	}elseif(!empty($bilangan_satu) && empty($bilangan_dua)){
				  		echo '<input type="text" value="isi bilangan dua" class="bilr" readonly="true">';
				  	}elseif(empty($bilangan_satu) && !empty($bilangan_dua)){
				  		echo '<input type="text" value="isi bilangan satu" class="bilr" readonly="true">';
				    }else{
				    	echo '<input type="text" value="isi kedua bilangan" class="bilr" readonly="true">';
					}
				}else{
					echo '<input type="text" value="0" class="bilr" readonly="true">';
				}
			
		?>
		
	</div>
</body>
</html>