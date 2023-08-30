<div class="container min-vh-100" style="margin-top: 8rem;">
    <div class="row justify-content-center">
        <div class="col-md-8 card py-3">
            <div class="card-title text-center">
                <span class="fs-3 fw-bold">Formulir Tes Diabetes</span>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p>Sebelum melakukan tes, Silahkan isi beberapa data dibawah ini :</p>
                </div>
                <form action="post">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td class="col-8 fw-semibold">
                                    <input type="radio" class="form-check-input" name="jenisKelamin" id="jenisKelamin1">
                                    <label for="jenisKelamin1" class="form-check-label me-3">Laki-Laki</label>
                                    <input type="radio" class="form-check-input" name="jenisKelamin" id="jenisKelamin2">
                                    <label for="jenisKelamin2" class="form-check-label">Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Berat Badan</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="<?php echo base_url('Pages/Test_Page/Diagnosis_Page') ?>" class="btn btn-danger">Selanjutnya</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>