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
                                <div class="card h-100 bg-danger-subtle border-danger">
                                    <div class="card-body d-flex align-items-center justify-content-center text-center">
                                        <p class="m-0"><?php echo $gdb['gejala'] ?></p>
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