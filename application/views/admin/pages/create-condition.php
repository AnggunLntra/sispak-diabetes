        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Kondisi</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Conditions/Create_Conditions_Action') ?>" onSubmit="validasi()">
                        <div class="form-group row">
                            <label for="id_kondisi" class="col-sm-2 col-form-label">ID Kondisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_kondisi" name="id_kondisi" value="<?php echo set_value('id_kondisi'); ?>">
                                <span class="small text-danger fst-italic"><?php echo form_error('id_kondisi'); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="kondisi" id="kondisi" value="<?php echo set_value('kondisi'); ?>" aria-describedby="validasiKondisi"></input>
                                <span class="small text-danger fst-italic"><?php echo form_error('kondisi'); ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>