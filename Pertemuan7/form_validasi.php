<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset error messages
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                // Validasi nama
                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi!");
                    valid = false;
                }

                // Validasi email
                if (email == "") {
                    $("#email-error").text("Email harus diisi!");
                    valid = false;
                } else if (!emailPattern.test(email)) {
                    $("#email-error").text("Format email tidak valid!");
                    valid = false;
                }

                // Validasi password
                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter!");
                    valid = false;
                }

                // Jika validasi gagal, cegah form dari submit
                if (!valid) {
                    event.preventDefault();
                } else {
                    event.preventDefault(); // Mencegah form submit normal
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (hasil) {
                            $("#myForm")[0].reset(); // Reset form setelah submit berhasil
                            alert(hasil); // Tampilkan hasil dari server
                        },
                        error: function () {
                            alert("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
