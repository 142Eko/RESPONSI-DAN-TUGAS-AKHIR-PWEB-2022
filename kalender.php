<!DOCTYPE html>
<html>
<head>
	<title>Kalender</title>
</head>
<body>
<?php
	$hari  = date ("d");
	$bulan = date ("m");
	$tahun = date ("Y");
	$jumlahhari= date("t",mktime(0,0,0,$bulan,$hari,$tahun)); 
?>
<br><br>
<?php
	switch($bulan){
		case 1 :
		$nmbulan= "Januari";
			break;
		case 2 :
		$nmbulan= "Februari";
			break;
		case 3 :
		$nmbulan= "Maret";
			break;
		case 4 :
		$nmbulan= "April";
			break;
		case 5 :
		$nmbulan= "Mei";
			break;
		case 6 :
		$nmbulan= "Juni";
			break;
		case 7 :
		$nmbulan= "Juli";
			break;
		case 8 :
		$nmbulan= "Agustus";
			break;
		case 9 :
		$nmbulan= "September";
			break;
		case 10 :
		$nmbulan= "Oktober";
			break;
		case 11 :
		$nmbulan= "November";
			break;
		case 12 :
		$nmbulan= "Desember";
			break;
			}
	echo"<center><h1>$nmbulan $tahun </h1></center>";
?>
<br>
	<table style="border: 2px solid black" align="center" cellpadding="10" >
		<tr bgcolor="#ADD8E6">
			<td align="center"><font color="FF0000">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>
<?php
	$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
	for ($ds=1; $ds <=$s ; $ds++) { 
			echo"<td></td>";
	}

	for ($d=1; $d <=$jumlahhari ; $d++) { 
		if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0 ){
			echo "<tr>";
	}

	$warna="#000000";
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday" ){
		$warna="#FF0000";
	}
	echo"<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 6 ){
			echo "</tr>";
			}
	}
	echo "</table>";
	ini_set('date.timezone', 'Asia/Jakarta');
			function hariIndo ($hariInggris) {
			  switch ($hariInggris) {
			    case 'Sunday':
			      return 'Minggu';
			    case 'Monday':
			      return 'Senin';
			    case 'Tuesday':
			      return 'Selasa';
			    case 'Wednesday':
			      return 'Rabu';
			    case 'Thursday':
			      return 'Kamis';
			    case 'Friday':
			      return 'Jumat';
			    case 'Saturday':
			      return 'Sabtu';
			  }
			}

			function bulanIndo ($bulanInggris) {
			  switch ($bulanInggris) {
			    case 'January':
			      return 'Januari';
			    case 'February':
			      return 'Februari';
			    case 'March':
			      return 'Maret';
			    case 'April':
			      return 'April';
			    case 'May':
			      return 'Mei';
			    case 'June':
			      return 'Juni';
			    case 'July':
			      return 'Juli';
			    case 'August':
			      return 'Agustus';
			    case 'September':
			      return 'September';
			    case 'October':
			      return 'Oktober';
			    case 'November':
			      return 'November';
			    case 'December':
			      return 'Desember'; 
			  }
			}
			  $hariBahasaInggris = date('l');
			  $hariBahasaIndonesia = hariIndo($hariBahasaInggris);
			  $bulanBahasaInggris = date('F');
			  $bulanBahasaIndonesia = bulanIndo($bulanBahasaInggris);
			 echo "<br><br><hr>";
			 echo ("Sekarang hari {$hariBahasaIndonesia} ");
			 echo date(" j ");
			 echo("{$bulanBahasaIndonesia} &nbsp");
			 echo date("Y");
			 echo "<br> Jam ";
			 echo date(" H:i A") . "<br>";
			 echo "<hr>";
?>
</body>
</html>