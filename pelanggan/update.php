<?php
if (isset($_POST['edit'])) {
    $email_pelanggan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email_pelanggan']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $no_telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $saldo_pelanggan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['saldo_pelanggan']))));
    $email_sebelumnya = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email_sebelumnya']))));

    $query = mysqli_query($koneksi, "UPDATE pelanggan SET email_pelanggan='$email_pelanggan', nama='$nama', alamat='$alamat', no_telp='$no_telp', saldo_pelanggan='$saldo_pelanggan' WHERE email_pelanggan='$email_sebelumnya'");

    if ($query) {
        header("Location: index.php?page=pelanggan");
    } else {
        echo "Gagal";
    }
}
