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
                    <table class="table table-hover border">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">No.</th>
                                <th scope="col">ID Pengetahuan</th>
                                <th class="col-3">Jenis Diabetes</th>
                                <th class="col-3">Gejala Diabetes</th>
                                <th scope="col-2">Nilai Keanggotaan</th>
                                <th class="col-2 text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($basis_pengetahuan_sistem as $bp) : ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$page ?></td>
                                    <td><?php echo $bp['id_pengetahuan'] ?></td>
                                    <td><?php echo $bp['jenis_dm'] ?></td>
                                    <td><?php echo $bp['gejala'] ?></td>
                                    <td>-</td>
                                    <td class="text-center">
                                        <ul class="list-unstyled m-0">
                                            <li class="list-inline-item m-1">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base/') . $bp['id_pengetahuan'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item m-1" onclick="javascript: return confirm('Hapus Data?')">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Delete_Knowladge_Base/') . $bp['id_pengetahuan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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