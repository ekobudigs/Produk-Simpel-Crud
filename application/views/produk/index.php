<div class="row">
        <div class="col-lg-6">
            

           <div> <?= $this->session->flashdata('msg'); ?></div>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

            <table class="table table-hover">
                <thead>
                <?php
                        $no = 1;
                        foreach ($produk as $p) {
                        ?>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $p->nama_produk; ?></td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php
                            $no++;
                        } ?>
                </tbody>
            </table>


        </div>
    </div>
