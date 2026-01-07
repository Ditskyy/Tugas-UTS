<?php
include 'koneksi.php';

$nama = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$jenis_mobil = $_POST['jenis_mobil']; 
$message = $_POST['message'];
$date = $_POST['date'];

$nama = mysqli_real_escape_string($koneksi, $nama);
$jenis_mobil = mysqli_real_escape_string($koneksi, $jenis_mobil);
$message = mysqli_real_escape_string($koneksi, $message);

$query = "INSERT INTO bookings (nama_pemesan, email, no_telepon, jenis_mobil, pesan_tambahan, tanggal_booking) 
          VALUES ('$nama', '$email', '$phone', '$jenis_mobil', '$message', '$date')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Terima kasih! Pesanan sewa mobil $jenis_mobil Anda berhasil dikirim.');
            window.location = 'TugasUTS.html'; 
          </script>";
} else {
    echo "Gagal mengirim data: " . mysqli_error($koneksi);
}
?>