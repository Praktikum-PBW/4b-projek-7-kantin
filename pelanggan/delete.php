<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE email_pelanggan='$id'");

    if ($query) {
        header("Location: index.php?page=pelanggan");
    } else {
        echo "Gagal";
    }
}
