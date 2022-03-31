<?php
if (isset($_POST['tambah'])) {
    $email_pelanggan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email_pelanggan']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $no_telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $saldo_pelanggan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['saldo_pelanggan']))));

    $query = mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$email_pelanggan', '$nama', '$alamat', '$no_telp', '$saldo_pelanggan')");

    if ($query) {
        header("Location: index.php?page=pelanggan");
    } else {
        echo "Gagal";
    }
}
