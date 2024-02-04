        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row mb-3">
                <div class="d-flex justify-content-end">
                    <a href="<?php echo base_url('Admin/Pages/Manage_Solutions/Create_Solutions') ?>" class="btn btn-warning"><i class="fa fa-plus text-white"><span class="text-white pl-3">Tambah Data</span></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <?php $this->view('admin/templates/message') ?>
                </div>
            </div>

            <div class="row overflow-hidden">
                <div class="col overflow-x-scroll">
                    <table class="table table-hover border">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">No.</th>
                                <th>Kode Solusi</th>
                                <th>Kode Penyakit</th>
                                <th class="col-2">Tingkat Risiko</th>
                                <th class="col-4 text-center">Solusi</th>
                                <th class="col-2 text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($solusi as $s) : ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$page ?></td>
                                    <td><?php echo $s['kode_solusi'] ?></td>
                                    <td><?php echo $s['kode_penyakit'] ?></td>
                                    <td><?php echo $s['tingkat_risiko'] ?></td>
                                    <td><?php echo $s['solusi'] ?></td>
                                    <td class="text-center">
                                        <ul class="list-unstyled m-0">
                                            <li class="list-inline-item m-1">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Solutions/Update_Solutions/') . $s['kode_solusi'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item m-1" onclick="javascript: return confirm('Hapus Data?')">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Solutions/Delete_Solutions/') . $s['kode_solusi'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div>