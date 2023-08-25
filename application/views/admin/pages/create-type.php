        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Jenis Diabetes</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Types/Create_Types_Action') ?>">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id_jenis" class="col-sm-4 col-form-label">Id Jenis</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo set_value('id_jenis'); ?>">
                                        <span class="small text-danger fst-italic error"><?php echo form_error('id_jenis'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="jenis_dm" class="col-sm-4 col-form-label">Jenis Diabetes</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenis_dm" name="jenis_dm" value="<?php echo set_value('jenis_dm'); ?>">
                                        <span class="small text-danger fst-italic"><?php echo form_error('jenis_dm'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="deskripsi" id="deskripsi" value="<?php echo set_value('deskripsi'); ?>"></input>
                                <span class="small text-danger fst-italic"><?php echo form_error('deskripsi'); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="solusi" id="solusi" value="<?php echo set_value('solusi'); ?>"></input>
                                <span class="small text-danger fst-italic"><?php echo form_error('solusi'); ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript:return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>