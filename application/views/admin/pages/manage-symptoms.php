        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Data Gejala Diabetes</h4>
                    </div>
                </div>
            </nav>

            <div class="row mb-3">
                <div class="d-flex justify-content-end">
                    <a href="<?php echo base_url('Admin/Pages/Manage_Symptoms/Create_Symptoms') ?>" class="btn btn-warning"><i class="fa fa-plus text-white"><span class="text-white pl-3">Tambah Data</span></i></a>
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
                                <th class="text-center" scope="col">Id Gejala</th>
                                <th scope="col">Gejala Diabetes</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($gejala as $gjl) : ?>
                                <tr>
                                    <td class="text-center"><?php echo ++$page ?></td>
                                    <td class="text-center"><?php echo $gjl['id_gejala']; ?></td>
                                    <td><?php echo $gjl['gejala']; ?></td>
                                    <td class="text-center">
                                        <ul class="list-unstyled m-0">
                                            <li class="list-inline-item m-1">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Symptoms/Update_Symptoms/') . $gjl['id_gejala'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item m-1" onclick="javascript: return confirm('Hapus Data?')">
                                                <a href="<?php echo base_url('Admin/Pages/Manage_Symptoms/Delete_Symptoms/') . $gjl['id_gejala'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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