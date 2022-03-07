<?php
require("koneksi.php");
$ambil = $conn->query("SELECT * FROM video_jihadpagi WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$conn->query("DELETE FROM video_jihadpagi WHERE id='$_GET[id]'");

echo "<script>alert('Data Berhasil Terhapus');</script>";
echo "<script>location='index.php?halaman=videojihad';</script>";
