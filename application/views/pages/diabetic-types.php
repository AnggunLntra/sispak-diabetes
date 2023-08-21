<div class="container min-vh-100" style="margin-top: 8rem;">
    <h1 class="fw-bold text-center my-5">Jenis Diabetes</h1>
    <div class="row">
        <?php
        $no = 1;
        foreach ($jenis_diabetes as $jns) : ?>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card h-100 bg-light-subtle border-danger shadow">
                    <div class="card-body">
                        <div class="card-title text-center py-3">
                            <span class="fs-4 fw-semibold"><?php echo $jns['jenis_dm'] ?></span>
                        </div>
                        <p class="fw-bold">Deskripsi :</p>
                        <p class="fst-italic"><?php echo $jns['deskripsi'] ?></p>
                        <p class="fw-bold">Solusi :</p>
                        <p class="fst-italic"><?php echo $jns['deskripsi'] ?></p>
                        <!-- <p class="fst-italic"><?php echo $jns['solusi'] ?></p> -->
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>