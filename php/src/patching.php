<?php
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'Redlock';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
// Jumlah data pada tabel users
$total_row = mysqli_num_rows($result);
// Menutup koneksi database
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>jumlah Data</h1>
    <h3>Jumlah data pada database Redlock-db adalah <?php echo $total_row; ?> </h3>
    <form method="get" action="index.php">
  <button type="submit">Kembali ke utama</button>
</form>

</body>
</html>


