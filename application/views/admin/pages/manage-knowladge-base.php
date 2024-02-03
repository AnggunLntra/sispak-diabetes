        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row mb-3">
                <div class="d-flex justify-content-end">
                    <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Create_Knowladge_Base') ?>" class="btn btn-warning"><i class="fa fa-plus text-white"><span class="text-white pl-3">Tambah Data</span></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <?php $this->view('admin/templates/message') ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-responsive table-hover border">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">No.</th>
                                <th>Kode Pengetahuan</th>
                                <th>Nama Penyakit</th>
                                <th class="col-4">Gejala</th>
                                <th class="col-2 text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pengetahuan as $index => $p) : ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$page ?></td>
                                    <td><?php echo $p['kode_pengetahuan'] ?></td>
                                    <td><?php foreach ($penyakit as $index => $pe) {
                                            if ($pe['kode_penyakit'] == $p['kode_penyakit']) {
                                                echo $pe['nama_penyakit'];
                                            }
                                        } ?></td>
                                    <td><?php foreach ($gejala as $index => $g) {
                                            if ($g['kode_gejala'] == $p['kode_gejala']) {
                                                echo $g['gejala'];
                                            }
                                        } ?></td>
                                    <td class="text-center">
                                        <ul class="list-unstyled m-0">
                                            <li class="list-inline-item m-1">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base/') . $p['kode_pengetahuan'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item m-1" onclick="javascript: return confirm('Hapus Data?')">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Delete_Knowladge_Base/') . $p['kode_pengetahuan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>