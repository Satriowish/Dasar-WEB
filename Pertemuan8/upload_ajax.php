<?php
if (isset($_FILES['files'])) {
    $errors = [];
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"]; // ekstensi gambar yang diizinkan
    $max_size = 2097152; // ukuran maksimum 2MB per file

    // Buat folder untuk menyimpan gambar jika belum ada
    if (!file_exists("imagesUpload")) {
        mkdir("imagesUpload", 0777, true); // Buat folder dengan permission yang sesuai
    }

    for ($key = 0; $key < count($_FILES['files']['name']); $key++) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];

        // Ambil ekstensi file
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Ekstensi file $file_name tidak diizinkan. Hanya JPG, JPEG, PNG, atau GIF yang diperbolehkan.";
            continue;
        }

        // Validasi ukuran file
        if ($file_size > $max_size) {
            $errors[] = "Ukuran file $file_name melebihi batas maksimum 2MB.";
            continue;
        }

        // Pindahkan file jika tidak ada error
        if (empty($errors)) {
            $destination = "imagesUpload/" . basename($file_name); // Menggunakan basename untuk keamanan
            if (move_uploaded_file($file_tmp, $destination)) {
                echo "<img src='$destination' alt='' width='50px'> <br>";
            } else {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        }
    }

    // Tampilkan pesan error atau sukses
    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
