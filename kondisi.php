<?php
$a="$_POST['pilihan']";
$angka1 = $_POST['angka1'];
$angka2= $_POST['angka2'];



if($a == "tambah"){
	$hasiltambah = $angka1 + $angka2;
	echo "hasil tambah: $hasiltambah";
}else if($a == "kurang"){
	$hasilkurang  = $angka1 - $angka2;
	echo "Hasil kurang : $hasilkurang";

}else if ($a == "kali"){
	$hasilkali = $angka1 * $angka2;
	echo "hasilkali : $hasilkali";
}else if ($a == "bagi"){
	$hasilbagi = $angka1 / $angka2;
	echo "hasilbagi : $hasilbagi";
}










  ?>