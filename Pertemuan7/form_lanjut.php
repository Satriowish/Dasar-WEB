<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="post" action="proses_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>
        <br>
        <label>Pilih Jenis Kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
‎Pertemuan7/proses_lanjut.php
+20
Original file line number	Diff line number	Diff line change
@@ -0,0 +1,20 @@
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    echo "Anda memilih buah: " . $selectedBuah . "<br>";
    
    if (!empty($selectedWarna)) {
        echo "Warna favorit anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda todak memilih warna favorit.<br>";
    }
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>