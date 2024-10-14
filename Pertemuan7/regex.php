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
$pattern = '/[0-9]+/'; // cocokkan satu atau lebih digit
$text = 'There are 123 apples..';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
    echo "<br>";
} else {
    echo "Tidak ada yang cocok!";
    echo "<br>";
}
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // output: "i like banana pie"
echo "<br>";