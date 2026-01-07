<?php
include 'koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$telepon = $_POST['no_telepon'];
$password = $_POST['password'];

$nama = mysqli_real_escape_string($koneksi, $nama);
$email = mysqli_real_escape_string($koneksi, $email);
$telepon = mysqli_real_escape_string($koneksi, $telepon);
$password = mysqli_real_escape_string($koneksi, $password);

$cek_email = mysqli_query($koneksi, "SELECT email FROM users WHERE email = '$email'");

if (mysqli_num_rows($cek_email) > 0) {

    echo "<script>
            alert('Email sudah terdaftar! Silakan gunakan email lain atau Login.');
            window.location = 'register.html';
          </script>";
} else {
    $query_insert = "INSERT INTO users (nama_lengkap, email, password, no_telepon, role) 
                     VALUES ('$nama', '$email', '$password', '$telepon', 'user')";

    if (mysqli_query($koneksi, $query_insert)) {
        echo "<script>
                alert('Pendaftaran Berhasil! Silakan Login.');
                window.location = 'login.html';
              </script>";
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($koneksi);
    }
}
?>