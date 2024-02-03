        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Gejala</h4>
                    </div>
                    <?php foreach ($gejala as $g) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Symptoms/Update_Symptoms_Action/') . $g->kode_gejala ?>">
                            <div class="form-group row">
                                <label for="kode_gejala" class="col-sm-2 col-form-label">Kode Gejala</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?php echo $g->kode_gejala ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gejala" class="col-sm-2 col-form-label">Gejala</label>
                                <div class="col-sm-10">
                                    <textarea name="gejala" id="gejala" class="form-control" cols="30" rows="5"><?php echo $g->gejala ?></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url() . 'Admin/Pages/Manage_Symptoms' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                                <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>