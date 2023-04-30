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

// Mengecek apakah query berhasil atau tidak
if ($result->num_rows > 0) {
    // Menampilkan total jumlah user
    $row = $result->fetch_assoc();
    echo "Total users: " . $row["total_users"];
} else {
    echo "No users found.";
}

// Menutup koneksi database
$conn->close();
?>