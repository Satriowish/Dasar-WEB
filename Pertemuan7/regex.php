<?php
$pattern = '/[a-z]/'; // cocokkan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
    echo "<br>";
} else {
    echo "tidak ada huruf kecil!";
    echo "<br>";
}