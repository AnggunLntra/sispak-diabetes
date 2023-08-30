<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-9 min-vh-100">
            <form action="" class="p-lg-5 p-3">
                <div class="header mb-3">
                    <h1 class="mb-5">Form Tes Diagnosis Diabetes Melitus</h1>
                    <p class="fw-bold m-0">Silahkan isi pertayaan dibawah ini berdasarkan dengan gejala yang anda alami.</p>
                    <small class="text-danger fst-italic">*Jawaban yang anda berikan mempengaruhi hasil perhitungan sistem, harap jawab pertanyaan dengan benar</small>
                </div>
                <?php
                $no = 1;
                foreach ($gejala as $gjl) : ?>
                    <div class="group-control row border-bottom py-1">
                        <div class="col-10">
                            <label for="" class="col-form-label"><?php echo $no++ ?>. Apakah anda mengalami gejala <?php echo $gjl['gejala'] ?></label>
                        </div>
                        <div class="col-2">
                            <select class="costum-select form-control form-control-sm">
                                <option value="">Ya</option>
                                <option value="">Tidak</option>
                            </select>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-warning me-4" type="reset">Reset</button>
                    <button class="btn btn-success" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>