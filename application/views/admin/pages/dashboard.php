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

            <div class="row">
                <p class="fst-italic fs-5">Selamat Datang di Halaman Admin <span class="fw-bold">SI<span class="text-warning">PAKAR</span></span></p>
            </div>

            <hr>

            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Jenis Diabetes</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-warning"><?php echo $jenis_diabetes; ?></span>
                            <p class="card-text text-danger fw-bolder">Data</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Gejala Diabetes</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-warning"><?php echo $gejala; ?></span>
                            <p class="card-text text-danger fw-bolder">Data</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Basis Pengetahuan</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-warning"><?php echo $basis_pengetahuan; ?></span>
                            <p class="card-text text-danger fw-bolder">Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>