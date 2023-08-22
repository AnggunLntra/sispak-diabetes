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
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id Pengetahuan</th>
                                <th scope="col">Id Jenis</th>
                                <th scope="col">Id Gejala</th>
                                <th scope="col">Nilai Fuzzy</th>
                                <th scope="col">Solusi</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <ul class="list-unstyled m-0">
                                        <li class="list-inline-item m-1">
                                            <a href="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item m-1">
                                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>