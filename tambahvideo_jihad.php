<?php
require("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Video</title>
</head>

<body>
    <h2>Tambah Video</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul Video</label>
            <input type="text" class="form-control" name="judulvideo">
        </div>
        <div class="form-group">
            <label>Link Video</label>
            <textarea class="form-control" name="linkvideo" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $conn->query("INSERT INTO video_jihadpagi (judul_video, link_video)
        VALUES ('$_POST[judulvideo]','$_POST[linkvideo]')");

        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=videojihad'>";
    }
    ?>
</body>

</html>