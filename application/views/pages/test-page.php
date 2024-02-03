<div class="container min-vh-100" style="padding-top: 10rem;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card py-3">
                <div class="card-title text-center">
                    <span class="fs-3 fw-bold">Formulir Tes Diabetes</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('Pages/Test_Diagnosis/User') ?>">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><label for="nama">Nama</label></td>
                                    <td class="col-8">
                                        <input name="nama" type="text" class="form-control" autocomplete="off">
                                        <small class="text-danger fst-italic"><?php echo form_error('nama'); ?></small>

                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="umur">Umur</label></td>
                                    <td class="col-8">
                                        <input name="umur" type="text" class="form-control" autocomplete="off">
                                        <small class="text-danger fst-italic"><?php echo form_error('umur'); ?></small>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Jenis Kelamin</label></td>
                                    <td class="col-8">
                                        <ul class="list-unstyled">
                                            <li class="list-inline-item">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki">
                                                <label for="jenis_kelamin" class="form-check-label me-3" value="laki-laki">Laki-Laki</label>
                                            </li>
                                            <li class="list-inline-item">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                                                <label for="jenis_kelamin" class="form-check-label" value="perempuan">Perempuan</label>
                                            </li>
                                        </ul>
                                        <small class="text-danger fst-italic"><?php echo form_error('jenis_kelamin'); ?></small>
                                    </td>
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
</div>