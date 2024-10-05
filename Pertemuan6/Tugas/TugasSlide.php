<!DOCTYPE html>
<html>
<head>
  <title>Tugas Slide Data Tabel</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-3.7.1.js"></script>

  <script>
    $(document).ready(function() {
      $("div.data").hide();
      $("div.data table").hide();
      $("div.data h2").hide();
      $(".show-db").click(function() {
        $("div.data").slideToggle("slow", function() {
          $("div.data table").fadeToggle("slow");
          $("div.data h2").fadeToggle("slow");
        });
      })
    })
  </script>

  </head>
  <body>
  <?php

  $dataSiswa = [
    [
      'nama' => 'Andi',
      'umur' => '15',
      'kelas' => '10A',
      'alamat' => 'Malang',
    ],
    [
      'nama' => 'Siti',
      'umur' => '16',
      'kelas' => '10B',
      'alamat' => 'Batu',
    ],
    [
      'nama' => 'Budi',
      'umur' => '15',
      'kelas' => '10A',
      'alamat' => 'Dinoyo',
    ],
    [
      'nama' => 'Anton',
      'umur' => '25',
      'kelas' => '15A',
      'alamat' => 'Dinoyo',
    ],
  ];

  function tampildata($dataSiswa)
  {
    foreach ($dataSiswa as $data) {
      echo "<tr>";
      echo "<td>{$data['nama']}</td>";
      echo "<td>{$data['umur']}</td>";
      echo "<td>{$data['kelas']}</td>";
      echo "<td>{$data['alamat']}</td>";
      echo "</tr>";
    }
  }
  
  function rataUmur($dataUmur)
  {
    $rataRata = 0;
    foreach ($dataUmur as $umur) {
      $rataRata += $umur['umur'];
    }
    $rataRata /= count($dataUmur);
    return $rataRata;
  }
  ?>
  <h1>Data Siswa</h1>
  <div class="container">
    <span class="show-db">Click to show database</span>
    
    <div class="data">
      <table cellpadding="10px">
        <tr>
          <th>Nama</th>
          <th>Umur</th>
          <th>Kelas</th>
          <th>Alamat</th>
        </tr>
        <?php tampildata($dataSiswa) ?>
      </table>
      <h2 class="rata">Rata-rata Umur Siswa : <?php echo rataUmur($dataSiswa) ?> tahun</h2>
    </div>
  </div>
</body>
</html>