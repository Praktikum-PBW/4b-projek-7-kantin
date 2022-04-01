<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email_pelanggan='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Edit profil</h4>
                </div>
                <form action="index.php?page=pelanggan_update" method="post">
                    <div class="mb-2">
                        <label for="email_pelanggan" class="form-label">Email</label>
                        <input type="text" name="email_pelanggan" id="email_pelanggan" class="form-control" value="<?= $data['email_pelanggan'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="no_telp" class="form-label">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $data['no_telp'] ?>">
                    </div>
                    <input type="hidden" name="saldo_pelanggan" value="<?= $data['saldo_pelanggan'] ?>">
                    <input type="hidden" name="email_sebelumnya" value="<?= $id ?>">
                    <input type="submit" value="Edit" name="edit" class="btn btn-success">
                </form>
            </div>
        </div>
<?php
    } else {
        header("Location: index.php?page=pelanggan");
    }
} else {
    header("Location: index.php?page=pelanggan");
}
