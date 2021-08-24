<div class="content">
    <div class="container-fluid">
        <?php echo $this->session->flashdata('messages'); ?>
        <div class="content-header-btn hide-class">
            <div class="row">
                <a href="<?= site_url('Barang/add') ?>" class="btn btn-primary ">Tambah Barang</a>
            </div>
        </div>
        <div class="content-table">
            <table id="table_id" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th class="hide-class">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        function harga($angka){
                            $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                            return $hasil_rupiah;
                        } 

                        $no=1; 
                        foreach($barang as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php 
                                if($data->foto != null){ ?>
                                    <img width="100px" src="<?= base_url('assets/img/uploads/'. $data->foto)?>"/>
                                <?php }?>
                            </td>
                        <td><?= $data->nama_barang ?></td>
                        <td><?= $data->kategori ?></td>
                        <td><?= harga($data->harga) ?></td>
                        <td><?= harga($data->diskon) ?></td>
                        <td class="hide-class" style="text-align: center">
                            <a href="<?= site_url('Barang/edit/'.$data->kd_barang)?>" class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBarang<?=$data->kd_barang ?>">Delete</button>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteBarang<?=$data->kd_barang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Barang</h5>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin mengahapus barang <strong>"<?= $data->nama_barang ?>"</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <a href="<?= site_url('Barang/delete/'.$data->kd_barang)?>" class="btn btn-danger">Ok</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
