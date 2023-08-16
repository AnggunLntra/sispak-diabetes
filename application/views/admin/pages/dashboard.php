        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Dashboard</h4>
                    </div>
                </div>
            </nav>

            <div class="row row-cols-1 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light">Jumlah Jenis Diabetes</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-danger"><?php echo $jenis_diabetes; ?></span>
                            <p class="card-text">Data</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light">Jumlah Gejala Diabetes</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-danger"><?php echo $gejala; ?></span>
                            <p class="card-text">Data</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light">Jumlah Basis Pengetahuan</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-danger"><?php echo $basis_pengetahuan; ?></span>
                            <p class="card-text">Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>