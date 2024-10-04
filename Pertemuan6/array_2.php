<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array 2</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <?php
    $Dosen = [
      'nama' => 'Elok Nur Hamdana',
      'domisili' => 'Malang',
      'jenis_kelamin' => 'Perempuan'
    ];

    // echo "Nama : {$Dosen ['nama']} <br>";
    // echo "Domisili : {$Dosen ['domisili']} <br>";
    // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

  ?>
  <div class="container">
    <h2>Profil Dosen</h2>
    <table>
      <tr>
        <th>Nama</th>
        <td><?php echo $Dosen['nama']; ?></td>
      </tr>
      <tr>
        <th>Domisili</th>
        <td><?php echo $Dosen['domisili']; ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
      </tr>
    </table>
  </div>
</body>
</html>
