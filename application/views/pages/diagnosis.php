<div class="container-fluid bg-light" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-lg-9 min-vh-100">
            <form method="post" action="<?php echo base_url('Pages/Diagnosis_Pages/Diagnosis_Page_Action') ?>" class="p-lg-5 p-3">
                <div class="header mb-3">
                    <h1 class="mb-5">Form Tes Diagnosis Diabetes Melitus</h1>
                    <p class="fw-bold m-0">Silahkan isi pertayaan dibawah ini.</p>
                    <small class="text-danger fst-italic">*Jawaban yang anda berikan mempengaruhi hasil perhitungan sistem, harap jawab pertanyaan dengan benar</small>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="makan" class="col-form-label">Jumlah makan dalam sehari</label>
                        </div>
                        <div class="col-md-6">
                            <input name="makan" type="number" class="form-input form-control" placeholder="Masukan jumlah makan dalam sehari. Contoh : 3" autocomplete="off">
                            <span class="small text-danger fst-italic"><?php echo form_error('makan'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="minum" class="col-form-label">Jumlah minum dalam sehari dalam bentuk ml</label>
                        </div>
                        <div class="col-md-6">
                            <input name="minum" type="number" class="form-input form-control" placeholder="Masukan jumlah minum sehari dalam bentuk ml. Contoh : 1500" autocomplete="off">
                            <span class="small text-danger fst-italic"><?php echo form_error('minum'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="bak" class="col-form-label">Jumlah buang air kecil dimalam hari</label>
                        </div>
                        <div class="col-md-6">
                            <input name="bak" type="number" class="form-input form-control" placeholder="Masukan jumlah buang air kecil dimalam hari. Contoh : 3" autocomplete="off">
                            <span class="small text-danger fst-italic"><?php echo form_error('bak'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-3">
                    <p class="fw-bold m-0">Silahkan isi pertayaan dibawah ini berdasarkan gejala yang anda alami.</p>
                    <small class="text-danger fst-italic">*Jawaban yang anda berikan mempengaruhi hasil perhitungan sistem, harap jawab pertanyaan dengan benar</small>
                </div>
                <?php foreach ($gejala as $g) : ?>
                    <div class="group-control py-1">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="<?php echo $g['kode_gejala'] ?>" class="col-form-label"><?php echo $g['gejala'] ?></label>
                            </div>
                            <div class="col-md-6">
                                <select name="<?php echo $g['kode_gejala'] ?>" class="costum-select form-control">
                                    <option value="Tidak">Tidak</option>
                                    <option value="Ya">Ya</option>
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