<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah pelanggan</h4>
        </div>
        <form action="index.php?page=pelanggan_store" method="post">
            <div class="mb-2">
                <label for="email_pelanggan" class="form-label">Email</label>
                <input type="text" name="email_pelanggan" id="email_pelanggan" placeholder="Masukan Email Anda" class="form-control">
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda" class="form-control">
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Anda" class="form-control">
            </div>
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" name="no_telp" id="no_telp" placeholder="Masukan No Telepon Anda" class="form-control">
            </div>
            <div class="mb-2">
                <input type="hidden" name="saldo_pelanggan" value="0" class="form-control" >
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>