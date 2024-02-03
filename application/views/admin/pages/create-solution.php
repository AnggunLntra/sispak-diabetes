        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Solusi</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Solutions/Create_Solutions_Action') ?>" onSubmit="validasi()">
                        <div class="form-group row">
                            <label for="kode_solusi" class="col-sm-2 col-form-label">Kode Solusi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_solusi" name="kode_solusi" value="<?php echo set_value('kode_solusi'); ?>">
                                <span class="small text-danger fst-italic"><?php echo form_error('kode_solusi'); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="kode_penyakit" name="kode_penyakit">
                                    <option value="0" selected>Pilih Penyakit</option>
                                    <?php foreach ($penyakit as $p) : ?>
                                        <option value="<?php echo $p['kode_penyakit'] ?>"><?php echo $p['nama_penyakit'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                                <span class="small text-danger fst-italic"><?php echo form_error('kode_penyakit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tingkat_risiko" class="col-sm-2 col-form-label">Tingkat Risiko</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="tingkat_risiko" name="tingkat_risiko">
                                    <option>Pilih Tingkat Risiko</option>
                                    <option value="Rendah">Rendah</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Tinggi">Tinggi</option>
                                </select>
                            </div>
                            <!-- <div class="col-sm-10">
                                <input type="text" class="form-control" id="tingkat_risiko" name="tingkat_risiko" value="<?php echo set_value('tingkat_risiko'); ?>">
                                <span class="small text-danger fst-italic"><?php echo form_error('tingkat_risiko'); ?></span>
                            </div> -->
                        </div>
                        <div class="form-group row">
                            <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                            <div class="col-sm-10">
                                <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"><?php echo set_value('solusi'); ?></textarea>
                                <span class="small text-danger fst-italic"><?php echo form_error('solusi'); ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="<?php echo base_url() . 'Admin/Pages/Manage_Solutions' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>