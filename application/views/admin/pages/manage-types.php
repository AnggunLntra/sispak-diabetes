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

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id Jenis</th>
                            <th scope="col">Jenis Diabetes</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Solusi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jenis_diabetes as $jns) : ?>
                            <tr>
                                <td><?php echo $jns['id_jenis']; ?></td>
                                <td><?php echo $jns['jenis_dm']; ?></td>
                                <td><?php echo $jns['deskripsi']; ?></td>
                                <td><?php echo $jns['solusi']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>