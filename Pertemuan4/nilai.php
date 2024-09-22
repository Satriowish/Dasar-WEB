<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);// ini saya urutkan dulu

echo "Seluruh Nilai siswa (Urut) : <br>";
echo implode(", ", $nilaiSiswa) . "<br><br>";

$nilaiTertinggi = array_slice($nilaiSiswa, -2); // 2 nilai tertinggi
$nilaiTerendah = array_slice($nilaiSiswa, 0, 2); // 2 nilai terendah

echo "2 Nilai Tertinggi : " . implode(", ", $nilaiTertinggi) . "<br>";
echo "2 Nilai Terendah  : " . implode(", ", $nilaiTerendah) . "<br><br>";

// Untuk mengabaikan 2 nilai tertinggi dan 2 nilai terendah
$nilaiSiswaTerpilih = array_slice($nilaiSiswa, 2, -2);
$totalNilai = array_sum($nilaiSiswaTerpilih);

echo "Nilai Setelah 2 Nilai Tertinggi dan 2 Nilai Terendah Dihilangklan : <br>";
echo implode(", ", $nilaiSiswaTerpilih) . "<br><br>";

echo "Total Nilai Setelah 2 Nilai Tertinggi dan 2 Nilai Terendah Dihilangklan :<br>";
echo "Total Nilai : $totalNilai ";

?>