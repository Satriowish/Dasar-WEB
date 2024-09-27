<?php
// Membuat Fungsi
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam.", ";
    // echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi  yang sudah dibuat
perkenalan("Satrio","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

// Memanggilo Lagi
perkenalan($saya);

echo "<hr>";
// Membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004, 2024) ." tahun"; 

?>