<?php
session_start();
include 'includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['admin'] = $data['id_admin'];
    header('Location: dashboard.php');
} else {
    echo 'Login gagal';
}
?>