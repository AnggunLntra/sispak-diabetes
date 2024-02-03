<div class="container-fluid bg-light" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-lg-9 min-vh-100">
            <form method="post" action="<?php echo base_url('Pages/Test/Test_Fuzzy') ?>" class="p-lg-5 p-3">
                <div class="header mb-3">
                    <h1 class="mb-5">Form Tes Diagnosis Diabetes Melitus <?php echo $nama ?><?php echo $jenis_kelamin ?></h1>
                    <p class="fw-bold m-0">Silahkan isi pertayaan dibawah ini berdasarkan dengan gejala yang anda alami.</p>
                    <small class="text-danger fst-italic">*Jawaban yang anda berikan mempengaruhi hasil perhitungan sistem, harap jawab pertanyaan dengan benar</small>
                </div>

                <div class="groip-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="makan" class="col-form-label">Jumlah makan dalam sehari</label>
                        </div>
                        <div class="col">
                            <input name="makan" type="number" class="form-input form-control" placeholder="Masukan berapa kali makan dalam sehari">
                        </div>
                    </div>
                </div>
                <div class="groip-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="minum" class="col-form-label">Jumlah minum dalam sehari</label>
                        </div>
                        <div class="col">
                            <input name="minum" type="number" class="form-input form-control" placeholder="Masukan jumlah mililiter konsumsi air putih dalam sehari">
                        </div>
                    </div>
                </div>
                <div class="groip-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="bak" class="col-form-label">Jumlah buang air kecil dimalam hari</label>
                        </div>
                        <div class="col">
                            <input name="bak" type="number" class="form-input form-control" placeholder="Masukan berapa kali buang air kecil dimalam hari">
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Penurunan berat badan tidak normal dalam 2 - 4 minggu</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Mudah lelah</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Kesemutan</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Kulit terasa panas atau seperti tertusuk-tusuk jarum</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Rasa kebas di kulit</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Kram</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Kelelahan</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Mudah mengantuk</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Penglihatan Kabur</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Gigi mulai goyah dan mudah lepas</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php if ($jenis_kelamin == 'Perempuan') {
                    echo '
                <div class="group-control py-1">
                <div class="row">
                    <div class="col">
                        <label for="gejala" class="col-form-label">Sedang Hamil</label>
                    </div>
                    <div class="col">
                        <select name="gejala[]" class="costum-select form-control">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>
                ';
                } else {
                    echo '
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Kemampuan seksual menurun</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Impotensi</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                ';
                } ?>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Keturunan penderita penyakit diabetes</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="group-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="gejala" class="col-form-label">Umur > 30 Tahun</label>
                        </div>
                        <div class="col">
                            <select name="gejala[]" class="costum-select form-control">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="groip-control py-1">
                    <div class="row">
                        <div class="col">
                            <label for="kdb" class="col-form-label">Keturunan penderita penyakit diabetes?</label>
                        </div>
                        <div class="col">
                            <input name="kdb" type="text" class="form-input form-control" placeholder="Masukan berapa kali buang air kecil dimalam hari">
                        </div>
                    </div>
                </div> -->
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-warning me-4" type="reset">Reset</button>
                    <!-- <input type="submit" value="Simpan" name="simpan"> -->
                    <button class="btn btn-success" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>