        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Ubah Data Gejala Diabetes</h4>
                    </div>
                </div>
            </nav>

            <div class="row justify-content-center">
                <div class="mb-5">
                    <h4 class="text-center">Form Ubah Data</h4>
                </div>
                <?php foreach ($gejala as $gjl) : ?>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Symptoms/Update_Symptoms_Action/') . $gjl->id_gejala ?>">
                        <div class=" form-group row">
                            <label for="id_gejala" class="col-sm-2 col-form-label">Id Gejala</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_gejala" name="id_gejala" value="<?php echo $gjl->id_gejala ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gejala" class="col-sm-2 col-form-label">Gejala</label>
                            <div class="col-sm-10">
                                <textarea name="gejala" id="gejala" class="form-control" cols="30" rows="5"><?php echo $gjl->gejala ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
        </div>