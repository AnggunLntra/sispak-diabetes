<div class="container-fluid bg-light" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-lg-9 min-vh-100">
            <form method="post" action="<?php echo base_url('Pages/Test/Forward_Chaining') ?>" class="p-lg-5 p-3">
                <div class="header mb-3">
                    <h1 class="mb-5">Form Tes Diagnosis Diabetes Melitus <?php echo $nama ?><?php echo $jenis_kelamin ?></h1>
                    <p class="fw-bold m-0">Silahkan isi pertayaan dibawah ini berdasarkan dengan gejala yang anda alami.</p>
                    <small class="text-danger fst-italic">*Jawaban yang anda berikan mempengaruhi hasil perhitungan sistem, harap jawab pertanyaan dengan benar</small>
                </div>
                <?php foreach ($gejala as $g) : ?>
                    <div class="group-control py-1">
                        <div class="row">
                            <div class="col-8">
                                <label for="<?php echo $g['kode_gejala'] ?>" class="col-form-label"><?php echo $g['gejala'] ?></label>
                            </div>
                            <div class="col">
                                <select name="<?php echo $g['kode_gejala']; ?>" class="costum-select form-control">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-warning me-4" type="reset">Reset</button>
                    <!-- <input type="submit" value="Simpan" name="simpan"> -->
                    <button class="btn btn-success" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>