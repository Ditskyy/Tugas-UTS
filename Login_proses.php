<?php 

session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($koneksi, $email);
$password = mysqli_real_escape_string($koneksi, $password);

$data = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $row = mysqli_fetch_assoc($data);
    
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $row['nama_lengkap'];
    $_SESSION['status'] = "login";

    header("location:TugasUTS.html");
} else {
    header("location:login.html?pesan=gagal");
}
?> 