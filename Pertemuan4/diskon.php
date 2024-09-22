<?php

$hargaProduk = 120000;
$diskon = ($hargaProduk > 100000) ? 0.2 * $hargaProduk : 0;

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "<h3>Harga Setelah Diskon:</h3>";
echo "Harga Awal Produk    : Rp $hargaProduk<br>";
echo "Diskon               : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga Setelah Diskon : Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');

?>