<div class="row">
        <div class="col-lg-6">
            

           <div> <?= $this->session->flashdata('msg'); ?></div>

            <a href="<?= base_url(); ?>produk/simpanproduk/" class="btn btn-primary mb-3" >Tambah Produk</a>

            <table class="table table-hover">
                <thead>
               
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Kategori Produk</th>
                        <th scope="col">Status Produk</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($produk as $p) {
                        ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $p->nama_produk; ?></td>
                        <td><?= $p->harga; ?></td>
                        <td><?= $p->kategori; ?></td>
                        <td><?= $p->status; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>produk/editproduk/<?= $p->id_produk; ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url(); ?>produk/hapusproduk/<?= $p->id_produk; ?>" class="badge badge-danger" onclick="return confirm('Hapus data?')">delete</a>
                        </td>
                    </tr>
                    <?php
                            $no++;
                        } ?>
                </tbody>
            </table>


        </div>
    </div>
