<form action="" method="post">
	<input type="number" name="bulan" placeholder="Masukan bulan">
	<input type="number" name="tanggal" placeholder="Masukkan tanggal">
	<input type="submit" value="kirim" name="tombol">
</form>

<?php
	if (isset($_POST["tombol"])) {
		$bulan=$_POST["bulan"];
		$tanggal=$_POST["tanggal"];

		// echo $bulan;
		// echo "<br>";
		// echo $tanggal;

		$ket="Salah";
		if ($bulan>0 && $bulan<13 && $tanggal>0 && $tanggal<32) {
			// $ket="Benar";
			if ($bulan==1 && $tanggal>19 && $tanggal<32) {
				$ket="Aquarius";
			}
			if ($bulan==2 && $tanggal>0 && $tanggal<19) {
				$ket="Aquarius";
			}
			if ($bulan==2 && $tanggal>18 && $tanggal<30) {
				$ket="Pisces";
			}
			if ($bulan==3 && $tanggal>0 && $tanggal<21) {
				$ket="Pisces";
			}
			if ($bulan==3 && $tanggal>20 && $tanggal<32) {
				$ket="Aries";
			}
			if ($bulan==4 && $tanggal>0 && $tanggal<20) {
				$ket="Aries";
			}
			if ($bulan==4 && $tanggal>19 && $tanggal<31) {
				$ket="Taurus";
			}
			if ($bulan==5 && $tanggal>0 && $tanggal<21) {
				$ket="Taurus";
			}
			if ($bulan==5 && $tanggal>20 && $tanggal<32) {
				$ket="Gemini";
			}
			if ($bulan==6 && $tanggal>0 && $tanggal<21) {
				$ket="Gemini";
			}
			if ($bulan==6 && $tanggal>20 && $tanggal<31) {
				$ket="Cancer";
			}
			if ($bulan==7 && $tanggal>0 && $tanggal<23) {
				$ket="Cancer";
			}
			if ($bulan==7 && $tanggal>22 && $tanggal<32) {
				$ket="Leo";
			}
			if ($bulan==8 && $tanggal>0 && $tanggal<23) {
				$ket="Leo";
			}
			if ($bulan==8 && $tanggal>22 && $tanggal<32) {
				$ket="Virgo";
			}
			if ($bulan==9 && $tanggal>0 && $tanggal<23) {
				$ket="Virgo";
			}
			if ($bulan==9 && $tanggal>22 && $tanggal<31) {
				$ket="Libra";
			}
			if ($bulan==10 && $tanggal>0 && $tanggal<23) {
				$ket="Libra";
			}
			if ($bulan==10 && $tanggal>22 && $tanggal<32) {
				$ket="Scorpio";
			}
			if ($bulan==11 && $tanggal>0 && $tanggal<22) {
				$ket="Scorpio";
			}
			if ($bulan==11 && $tanggal>21 && $tanggal<31) {
				$ket="Sagitarius";
			}
			if ($bulan==12 && $tanggal>0 && $tanggal<22) {
				$ket="Sagitarius";
			}
			if ($bulan==12 && $tanggal>21 && $tanggal<32) {
				$ket="Capricorn";
			}
			if ($bulan==1 && $tanggal>0 && $tanggal<20) {
				$ket="Capricorn";
			}

		}
		echo $ket;
	}
?>