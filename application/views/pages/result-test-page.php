<div class="container" style="margin-top: 8rem;">
    <div class="col-lg-12 min-vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <!-- <div class="card-title text-white bg-success rounded-top p-lg-5 p-3 border-bottom">
                        <h1 class="text-bold text-center mb-lg-5">Hasil Tes Diagnosis Diabetes</h1>
                        <p class="small text-end m-0">Tanggal : 12/04/2023</p>
                    </div> -->
                    <div class="card-body">
                        <div class="subtitle border-bottom">
                            <h6 class="fw-bold text-center mb-4">Identitas Pengguna</h6>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td class="col-9 fw-semibold">: <?php echo $nama ?></td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td class="col-8 fw-semibold">Karawang, 24 September 2001</td>
                                    </tr> -->
                                    <tr>
                                        <td class="text-nowrap">Jenis Kelamin</td>
                                        <td class="col-9 fw-semibold">: <?php echo $jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <td>Usia</td>
                                        <td class="col-9 fw-semibold">: <?php echo $umur ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="subtitle mt-3">
                            <span class="fw-bold">Hasil Diagnosis <span class="text-uppercase text-danger">sipakar</span></span>
                            <?php foreach ($hasil_diagnosis as $hasil) : ?>
                                <p class="">Hasil Perhitungan Metode Fuzzy Inference System Tsukamoto: </p>
                                <p class="fw-bolder text-center"><?php echo $hasil->hasil_output ?></p>
                            <?php endforeach ?>
                            <p class="bg-danger bg-opacity-10 p-2 rounded-1">Berdasarkan hasil perhitungan diatas, kemungkinan Anda menderita penyakit <span class="fw-bold"><?php foreach ($penyakit as $p) {
                                                                                                                                                                                    echo $p->nama_penyakit;
                                                                                                                                                                                } ?></span> dengan tingkat risiko <span class="fw-bold"><?php echo $hasil->tingkat_risiko ?></span>.</p>

                        </div>
                        <div class="subtitle mt-3">
                            <span class="fw-semibold fst-italic">Solusi yang disarankan : </span>
                            <p class="bg-light p-2 rounded-1"><?php echo $hasil->solusi ?></p>
                        </div>
                        <p class="small fst-italic text-danger">*Harapkan lakukan pemeriksaan lebih lanjut untuk mengurangi tingkat risiko dari penyakit diabetes melitus.</p>

                        <div class="text-center mt-5">
                            <a href="<?php echo base_url('Pages/Diagnosis_Pages/Delete_Data/') . $hasil->id_pengguna ?>" class="btn btn-danger text-white">Kembali</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-uppercase text-danger text-end small fw-bold m-0">sipakar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>