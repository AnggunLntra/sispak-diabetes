<div class="container min-vh-100" style="margin-top: 8rem;">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-0">
                <h1 class="fw-bold text-center mb-3 text-danger">Gejala-Gejala Diabetes</h1>
                <div class="card-body">
                    <p class="card-text">Berdasarkan hasil wawancara dengan pakar, terdapat sebanyak <?php echo $jumlahGejala; ?> gejala yang biasa dialami oleh penderita penyakit diabetes. Berikut <?php echo $jumlahGejala; ?> gejala yang biasa dialami oleh penderita diabetes :
                    </p>
                    <div class="row">
                        <?php
                        $no = 1;
                        foreach ($gejala_diabetes as $gdb) : ?>
                            <div class="col-lg-3 mb-3">
                                <div class="card h-100 bg-light border-0 rounded-3 shadow-sm">
                                    <div class="card-body d-md-flex justify-content-center align-items-center text-md-center">
                                        <p class="fw-medium text-dark m-0"><span class="text-danger me-1"><?php $no++ . '.' ?></span><?php echo $gdb['gejala'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>