<div class="container min-vh-100" style="margin-top: 8rem;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0">
                <h1 class="fw-bold text-center mb-3 text-danger">Gejala-Gejala Diabetes</h1>
                <div class="card-body">
                    <p class="card-text">Berdasarkan hasil wawancara dengan pakar, terdapat sebanyak 19 gejala yang biasa dialami oleh penderita penyakit diabetes. Berikut 19 gejala yang biasa dialami oleh penderita diabetes :
                    </p>
                    <ul class="list-group list-group-flush">
                        <?php
                        $no = 1;
                        foreach ($gejala as $gjl) : ?>
                            <li class="list-group-item"><?php echo $no++ ?>. <?php echo $gjl['gejala'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>