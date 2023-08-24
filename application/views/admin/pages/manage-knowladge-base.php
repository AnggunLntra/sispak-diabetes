        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Data Basis Pengetahuan</h4>
                    </div>
                </div>
            </nav>

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
                                <th scope="col">Id Pengetahuan</th>
                                <th scope="col">Id Jenis</th>
                                <th scope="col">Id Gejala</th>
                                <th scope="col">Nilai Fuzzy</th>
                                <!-- <th scope="col">Solusi</th> -->
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($basis_pengetahuan as $bp) : ?>
                                <tr>
                                    <td><?php echo $bp['id_pengetahuan'] ?></td>
                                    <td><?php echo $bp['id_jenis'] ?></td>
                                    <td><?php echo $bp['id_gejala'] ?></td>
                                    <td><?php echo $bp['nilai_fuzzy'] ?></td>
                                    <!-- <td><?php echo $bp['solusi'] ?></td> -->
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
                </div>
            </div>
        </div>
        </div>
        </div>