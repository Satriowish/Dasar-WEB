<?php
// Membuat Fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    // Memanggil fungsi lain
    echo "Saya Berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Satrio");

?>