        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Data Jenis Diabetes</h4>
                    </div>
                </div>
            </nav>

            <div class="row mb-3">
                <div class="d-flex justify-content-end">
                    <a href="<?php echo base_url('Admin/Pages/Manage_Types/Create_Types') ?>" class="btn btn-warning"><i class="fa fa-plus text-white"><span class="text-white pl-3">Tambah Data</span></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <?php echo $this->session->flashdata('pesan') ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-responsive table-hover border">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">No.</th>
                                <th class="text-nowrap" scope="col">Id Jenis</th>
                                <th scope="col">Jenis Diabetes</th>
                                <th class="col-3" scope="col">Deskripsi</th>
                                <th class="col-3" scope="col">Solusi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($jenis_diabetes as $jns) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td><?php echo $jns['id_jenis']; ?></td>
                                    <td><?php echo $jns['jenis_dm']; ?></td>
                                    <td><?php echo $jns['deskripsi']; ?></td>
                                    <td><?php echo $jns['solusi']; ?></td>
                                    <td class="text-center">
                                        <ul class="list-unstyled m-0">
                                            <li class="list-inline-item m-1">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Types/Update_Types/') . $jns['id_jenis'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item m-1" onclick="javascript:return confirm('Hapus Data?')">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Types/Delete_Types/') . $jns['id_jenis'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>