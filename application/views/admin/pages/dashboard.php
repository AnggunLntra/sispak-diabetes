        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <!-- <div class="row">
                <p class="fw-bold fs-5 text-dark">Selamat Datang <span class="text-capitalize"><?php echo $this->session->userdata('nama'); ?></span></p>
            </div> -->

            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Data Penyakit</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-warning"><?php echo $penyakit; ?></span>
                            <p class="card-text text-danger fw-bolder">Data</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Data Gejala</div>
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
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-light fw-bolder">Jumlah Data Solusi</div>
                        <div class="card-body">
                            <span class="fs-1 fw-bold text-warning"><?php echo $solusi; ?></span>
                            <p class="card-text text-danger fw-bolder">Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>