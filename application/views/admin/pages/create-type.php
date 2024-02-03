        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Penyakit</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Types/Create_Types_Action') ?>">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id" class="col-sm-4 col-form-label">Kode Penyakit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit" value="<?php echo set_value('kode_penyakit'); ?>">
                                        <span class="small text-danger fst-italic error"><?php echo form_error('kode_penyakit'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nama_penyakit" class="col-sm-4 col-form-label">Nama Penyakit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" value="<?php echo set_value('nama_penyakit'); ?>">
                                        <span class="small text-danger fst-italic"><?php echo form_error('nama_penyakit'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5"><?php echo set_value('deskripsi'); ?></textarea>
                                <span class="small text-danger fst-italic"><?php echo form_error('deskripsi'); ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="<?php echo base_url() . 'Admin/Pages/Manage_Types' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript:return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>