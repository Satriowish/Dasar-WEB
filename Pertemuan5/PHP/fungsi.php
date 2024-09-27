<?php
// Membuat Fungsi
function perkenalan($nama, $salam) {
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
perkenalan($saya,$ucapanSalam);

?>