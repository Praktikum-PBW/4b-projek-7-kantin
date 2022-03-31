CREATE TABLE `pelanggan` (
  `email_pelanggan` varchar(255) PRIMARY KEY,
  `nama` varchar(255),
  `alamat` varchar(255),
  `no_telp` varchar(255),
  `saldo_pelanggan` int
);

CREATE TABLE `penjual` (
  `email_penjual` varchar(255) PRIMARY KEY,
  `password` varchar(255),
  `nama_penjual` varchar(255),
  `id_kantin` int
);

CREATE TABLE `produk` (
  `id_produk` int PRIMARY KEY AUTO_INCREMENT,
  `nama_produk` varchar(255),
  `harga` int,
  `deskripsi` varchar(255),
  `foto` text,
  `id_kategori` int,
  `id_kantin` int
);

CREATE TABLE `kategori` (
  `id_kategori` int PRIMARY KEY AUTO_INCREMENT,
  `nama_kategori` varchar(255),
  `jenis` varchar(255)
);

CREATE TABLE `kantin` (
  `id_kantin` int PRIMARY KEY AUTO_INCREMENT,
  `nama_kantin` varchar(255),
  `saldo_kantin` int
);

CREATE TABLE `pemesanan` (
  `id_pemanasan` int PRIMARY KEY AUTO_INCREMENT,
  `email_pelanggan` int,
  `id_produk` int
);
