<div class="container min-vh-100" style="margin-top: 8rem;">
    <div class="row justify-content-center">
        <div class="col-md-8 card py-3">
            <div class="card-title text-center">
                <span class="fs-3 fw-bold">Formulir Tes Diabetes</span>
            </div>
            <div class="card-body">
                <form action="post">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Nama Pasien</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td class="col-8 fw-semibold"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td class="col-8 fw-semibold"><input type="date" class="form-control"></td>
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
                                <td>Alamat</td>
                                <td class="col-8 fw-semibold"><textarea name="alamat" id="alamatRumah" cols="20" rows="3" class="form-control"></textarea></td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Mulai Diagnosis</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>