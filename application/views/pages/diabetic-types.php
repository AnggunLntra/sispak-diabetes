<div class="container min-vh-100" style="margin-top: 8rem;">
    <h1 class="fw-bold text-danger text-center my-5">Jenis-Jenis Diabetes</h1>
    <div class="row">
        <?php
        $no = 1;
        foreach ($penyakit as $p) : ?>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card h-100 border-light shadow-sm">
                    <div class="card-body text-dark">
                        <div class="card-title text-md-center py-md-3">
                            <span style="font-size: 1.3rem"><?php echo $p['nama_penyakit'] ?></span>
                        </div>
                        <p class="fw-bold m-0">Deskripsi :</p>
                        <p class="lh-sm" style="font-size: 1rem"><?php echo $p['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>