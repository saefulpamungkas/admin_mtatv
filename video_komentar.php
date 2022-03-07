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
    <title>video komentar</title>
</head>

<body>
    <h2>Data Komentar Video</h2>
    <a href="index.php?halaman=tambahvideo_jihad" class="btn btn-primary" style="margin-bottom: 20px;">
        <i class="fas fa-plus-square"></i> Tambah data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pesan</th>
                <th>Link Video</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php $ambil = $conn->query("SELECT * FROM video_komentar"); ?>
            <?php while ($row = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['pertanyaan'] ?></td>
                    <td><?php echo $row['link_video'] ?></td>
                    <td>
                        <a href="index.php?halaman=editproduk&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit "></i> Edit</a>
                        <a href="index.php?halaman=hapusvideo_jihad&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>