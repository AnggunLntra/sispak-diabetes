        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Ubah Data Tipe Diabetes</h4>
                    </div>
                </div>
            </nav>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Data</h4>
                    </div>
                    <?php foreach ($jenis_diabetes as $jns) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Types/Update_Types_Action/') . $jns->id_jenis ?>">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="id_jenis" class="col-sm-4 col-form-label">Id Jenis</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $jns->id_jenis ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="jenis_diabetes" class="col-sm-4 col-form-label">Jenis Diabetes</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="enis_diabetes" name="jenis_dm" value="<?php echo $jns->jenis_dm ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5"><?php echo $jns->deskripsi ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                                <div class="col-sm-10">
                                    <textarea name="solusi" id="id_jenis" class="form-control" cols="30" rows="5"><?php echo $jns->solusi ?></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                                <button type="submit" class="btn btn-primary ml-3" onclick="javascript:return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>