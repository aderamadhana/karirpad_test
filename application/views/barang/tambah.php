<div class="content">
    <div class="container-fluid">
        <div class="content-header-btn hide-class">
            <div class="row">
                <a href="<?= site_url('Barang') ?>" class="btn btn-default">Kembali</a>
            </div>
        </div>
        <div class="content-table">
            <form action="<?= site_url('Barang/doAdd')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" name="kategori" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" min=0 class="form-control" name="harga" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>