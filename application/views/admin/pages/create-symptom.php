        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Gejala</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Symptoms/Create_Symptoms_Action') ?>" onSubmit="validasi()">
                        <div class="form-group row">
                            <label for="kode_gejala" class="col-sm-2 col-form-label">Kode Gejala</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?php echo set_value('kode_gejala'); ?>">
                                <span class="small text-danger fst-italic"><?php echo form_error('kode_gejala'); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gejala" class="col-sm-2 col-form-label">Gejala</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="gejala" id="gejala" value="<?php echo set_value('gejala'); ?>" aria-describedby="validasiGejala"></input>
                                <span class="small text-danger fst-italic"><?php echo form_error('gejala'); ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="<?php echo base_url() . 'Admin/Pages/Manage_Symptoms' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>