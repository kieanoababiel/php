<?php




$tanggal = $_POST['tgl'];
$nama = $_POST['nma'];
$pesanan = $_POST['psanan'];
$harga = $_POST['hrga'];
$jumlah = $_POST['jumlh'];
$total = $harga * $jumlah ;

echo "<h2>Struk Pembayaran Kopi Bentok</h2><br>";
echo "-----------------------------------------<br>";
echo "Tanggal:$tanggal  <br>";
echo "Nama:$nama <br>";
echo "Pesanan:$pesanan <br>";
echo "Harga:$harga <br>";
echo "Jumlah:$jumlah <br>  ";
echo "Total:$total <br>";
echo "----------------------------------------<br>";
echo "<h2>Terima Kasih</h2> <br>";








  ?>