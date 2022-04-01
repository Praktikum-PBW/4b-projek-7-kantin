<?php
if (isset($_GET['page'])) {

    include 'lib/koneksi.php';

    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include 'dashboard.php';
            break;
        case 'pelanggan':
            include 'pelanggan/index.php';
            break;
        case 'pelanggan_create':
            include 'pelanggan/create.php';
            break;
        case 'pelanggan_store':
            include 'pelanggan/store.php';
            break;
        case 'pelanggan_edit':
            include 'pelanggan/edit.php';
            break;
        case 'pelanggan_update':
            include 'pelanggan/update.php';
            break;
        case 'pelanggan_delete':
            include 'pelanggan/delete.php';
            break;
        default:
            echo "Maaf halaman tidak ditemukan";
            break;
    }
} else {
    include 'lib/koneksi.php';
    include 'pelanggan/index.php';
}
