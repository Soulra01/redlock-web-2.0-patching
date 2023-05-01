<?php
// Ini adalah lingkungan autentikasi yang telah ditentukan di layanan db

// Layanan MySQL yang dinamai dalam docker-compose.yml.
$host = 'db';

// Nama pengguna database
$user = 'MYSQL_USER';

// Kata sandi pengguna database
$pass = 'MYSQL_PASSWORD';

// Nama database
$mydatabase = 'Redlock';

// memeriksa status koneksi mysql
$conn = new mysqli($host, $user, $pass, $mydatabase);

// query select
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$nomor = 1;
// Menutup koneksi
mysqli_close($conn);
?>
<html>
<head>
  <title>Data Redlock</title>
</head>
<body>
  <h1>Data Pegawai</h1>
  <table style="border: 1px solid black;">
    <tr>
      <th>Nomor</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jabatan</th>
    </tr>
    <?php if($result->num_rows > 0){ ?>
      <?php while($data = $result->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $nomor++; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td><?php echo $data['jabatan']; ?></td>
        </tr>
      <?php } ?>
    <?php }else{ ?>
      <tr>
        <td colspan='3'>Data Tidak Ditemukan</td>
    </tr>
    <?php } ?>
  </table>
  <form method="get" action="patching.php">
  <button type="submit">Ke Halaman Patching</button>
</form>

</body>
</html>