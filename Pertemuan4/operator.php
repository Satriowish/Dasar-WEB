<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan Hasil 
echo "Hasil Tambah = $a + $b = $hasilTambah<br>";
echo "Hasil Kurang = $a - $b = $hasilKurang<br>";
echo "Hasil Kali = $a * $b = $hasilKali<br>";
echo "Hasil Bagi = $a / $b = $hasilBagi<br>";
echo "Hasil sisaBagi = $a % $b = $sisaBagi<br>";
echo "Hasil pangkat = $a ** $b = $pangkat<br><br>";

//Langkah 5
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menampilkan Hasil
echo "Hasil Sama (a == b): " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Sama (a != b): " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil (a < b): " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar (a > b): " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil Sama (a <= b): " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar Sama (a >= b): " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan Hasil
echo "Hasil AND = $a && $b " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR = $a || $b " . ($hasilOr ? 'true' : 'false'). "<br>" ;
echo "Hasil NOT A = !$a " . ($hasilNotA ? 'true' : 'false') ."<br>";
echo "Hasil NOT B = !$b " . ($hasilNotB ? 'true' : 'false'). "<br>";

echo"<br>";

// Operasi pada langkah no 11
($a += $b);
($a -= $b);
($a *= $b);
($a /= $b);
($a % $b);

// Soal No 3.4
echo "$a += $b = " . ($a += $b) . "<br>";
echo "$a -= $b = " . ($a -= $b) . "<br>";
echo "$a *= $b = " . ($a *= $b) . "<br>";
echo "$a /= $b = " . ($a /= $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";

?>