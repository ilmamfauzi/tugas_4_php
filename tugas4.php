<?php
$beli = 8000;
$jual = 7500;
$untung = 300;

$jual_per_ekor = $jual + $untung;
$jumlah_beli = $beli / $jual_per_ekor;

echo "Harga Beli = Rp $beli<br>";
echo "Harga Jual = Rp $jual<br>";
echo "Keuntungan = Rp $untung<br>";
echo "Jumlah Kambing yang Dibeli = $jumlah_beli";
