<h2>Edit Data Video</h2>
<?php
require("koneksi.php");

$ambil = $conn->query("SELECT * FROM video_populer WHERE id_='$_GET[id]'");
$row = $ambil->fetch_assoc();

?>

<form method="POST" enctype="multipart/form-data">
    <div class="from-group">
        <label>Judul Video</label>
        <input type="text" name="judul_video" class="form-control" value="<?php echo $row['judul_video']; ?>">
    </div>
    <div class="from-group">
        <label>Link Video</label>
        <textarea name="link_video" class="form-control" rows="10">
        <?php echo $row['link_video']; ?>
        </textarea>
    </div>
    <button class="btn btn-primary" name="edit">Ubah</button>
</form>

<?php
if (isset($_POST['edit'])) {
    // $namafoto = $_FILES['foto']['name'];
    // $lokasifoto = $_FILES['foto']['tmp_name'];

    $conn->query("UPDATE video_populer SET judul_video='$_POST[judul_video]',
        link_video='$_POST[link_video]' WHERE id='$_GET[id]'");
    //jika foto dirubah
    // if (!empty($lokasifoto)) {
    //     move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

    // } else {
    //     $conn->query("UPDATE produk SET nama_produk='$_POST[nama]',
    //     harga_produk='$_POST[harga]',stok_produk='$_POST[stok]',deskripsi_produk='$_POST[deskripsi]',
    //     id_kategori='$_POST[id_kategori]' WHERE id_produk='$_GET[id]'");
    // }
    echo "<script>alert('Data Video Telah di Ubah');</script>";
    echo "<script>location='index.php?halaman=videopopular';</script>";
}
?>