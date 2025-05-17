<?php
include '../includes/connection.php';
$result = mysqli_query($conn, 'SELECT * FROM pendaki');
echo '<table border="1"><tr><th>Nama</th><th>Alamat</th><th>Email</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $row['nama'] . '</td><td>' . $row['alamat'] . '</td><td>' . $row['email'] . '</td></tr>';
}
echo '</table>';
?>