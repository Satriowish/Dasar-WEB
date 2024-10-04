<?php
// Membuat Fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang telah dibuat
perkenalan("Satrio","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";
// Memanggil Lagi tanpa parameter salam
perkenalan($saya);
?>