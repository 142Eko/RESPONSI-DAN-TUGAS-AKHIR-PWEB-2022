<?php
	include("hdr.html");
	include("form.html");
	$nim=@$_POST["nim"];
	$nama=@$_POST["nama"];
	$kelas=@$_POST["kls"];
	$email=@$_POST["email"];
	$kota=@$_POST["kota"];
//simpan kedalam file
	$fileku=fopen("data.txt", "a");//buka file dengan mode archive
	fwrite($fileku,"$nim:$nama:$kelas:$email:$kota\n");//simpan data ke dalam file
	fclose($fileku);//close agar terjadi write data secara fisik
	include ("ftr.html");
?>