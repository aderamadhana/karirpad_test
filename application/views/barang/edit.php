<div class="content">
    <div class="container-fluid">
        <div class="content-header-btn hide-class">
            <div class="row">
                <a href="<?= site_url('Barang') ?>" class="btn btn-default">Kembali</a>
            </div>
        </div>
        <div class="content-table">
            <form action="<?= site_url('Barang/doEdit')?>" method="post" enctype="multipart/form-data">
                <?php foreach($barang as $data){ ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="hidden" class="form-control" name="kd_barang" value="<?= $data->kd_barang?>" required>
                        <input type="text" class="form-control" name="nama_barang" value="<?= $data->nama_barang?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="<?= $data->kategori?>" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" min=0 class="form-control" name="harga" value="<?= $data->harga?>" required>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto">
                        <input type="hidden" class="form-control" value="<?= $data->foto?>" name="gambar">
                        <img width="100px" src="<?= base_url('assets/img/uploads/'. $data->foto)?>"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <?php }?>
            </form>
        </div>
    </div>
</div>