<?php

$totalSkor = 505;
$hadiahTambahan = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "<h3>Skor pemain Game</h3>";
echo "Total skor pemain adalah: $totalSkor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

?>