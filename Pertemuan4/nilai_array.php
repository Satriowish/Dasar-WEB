<?php

$daftarNilaiMatematika = [
  ['Alice', 85],
  ['Bob', 92],
  ['Charlie', 78],
  ['David', 64],
  ['Eva', 90],
];

$daftarNilaiDiatasRata = [];
$rata = 0;

// List daftar nilai Siswa
echo "<h3>Daftar Nilai Ujian Matematika:</h3>";
foreach ($daftarNilaiMatematika as $nilai) {
  echo $nilai[0] . " : " . $nilai[1] . "<br>";
}
echo"<br>";

// hitung total nilai
foreach ($daftarNilaiMatematika as $nilai) {
  $rata += $nilai[1];
}

//hitung rata rata
$rata /= count($daftarNilaiMatematika);

// menyimpan nilai di atas rata rata
foreach ($daftarNilaiMatematika as $nilai) {
  if ($nilai[1] > $rata) {
    $daftarNilaiDiatasRata[] = $nilai[0] . ' (' . $nilai[1] . ')';
  }
}

// Tampil
echo "Jumlah siswa: " . count($daftarNilaiMatematika) . "<br>";
echo "Rata rata : $rata <br><br>";
echo "Daftar Nilai Ujian Matematika Di Atas Rata-rata : 
" . implode(', ', $daftarNilaiDiatasRata);

?>