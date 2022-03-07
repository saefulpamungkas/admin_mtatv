<?php
require("koneksi.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome-free-6.0.0/css/all.min.css">
    <title>video popular</title>
</head>

<body>
    <h2>Data Video Populer</h2>
    <a href="index.php?halaman=tambahvideo" class="btn btn-primary" style="margin-bottom: 20px;">
        <i class="fas fa-plus-square"></i> Tambah data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Video</th>
                <th>Link Video</th>
                <th>Menit Pertanyaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php $ambil = $conn->query("SELECT * FROM video_populer"); ?>
            <?php while ($row = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['judul_video'] ?></td>
                    <td><?php echo $row['link_video'] ?></td>
                    <td></td>
                    <td>
                        <a href="index.php?halaman=editvideo&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit "></i> Edit</a>
                        <a href="index.php?halaman=hapusvideo_popular&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>