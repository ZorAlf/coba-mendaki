<?php
include 'includes/connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT latitude, longitude FROM pencarian_pendaki WHERE id_pendaki='$id' ORDER BY waktu_tracking DESC LIMIT 1");
$data = mysqli_fetch_assoc($result);
echo json_encode($data);
?>