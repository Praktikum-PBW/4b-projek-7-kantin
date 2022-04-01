<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data pelanggan</h4>
            <a href="index.php?page=pelanggan_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Saldo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY email_pelanggan DESC");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['email_pelanggan'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['no_telp'] ?></td>
                                <td><?= $data['saldo_pelanggan'] ?></td>
                                <td>
								<a href="index.php?page=pelanggan_edit&id=<?= $data['email_pelanggan'] ?>" title="Ubah" class="btn btn-success"> Ubah </a>
								<a href="index.php?page=pelanggan_delete&id=<?= $data['email_pelanggan'] ?>" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger"> Hapus </a>
							    </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="12">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>