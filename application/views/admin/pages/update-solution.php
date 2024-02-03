        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Solusi</h4>
                    </div>
                    <?php foreach ($solusi as $s) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Solutions/Update_Solutions_Action/') . $s->kode_solusi ?>">
                            <div class=" form-group row">
                                <label for="kode_solusi" class="col-sm-2 col-form-label">Kode Solusi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_solusi" name="kode_solusi" value="<?php echo $s->kode_solusi ?>">
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="kode_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" id="kode_penyakit" name="kode_penyakit">
                                        <option value="<?php echo $s->kode_penyakit ?>" selected><?php echo $s->kode_penyakit ?></option>
                                        <?php foreach ($penyakit as $p) : ?>
                                            <option value="<?php echo $p['kode_penyakit'] ?>"><?php echo $p['nama_penyakit'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="tingkat_risiko" class="col-sm-2 col-form-label">Tingkat Risiko</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" id="tingkat_risiko" name="tingkat_risiko">
                                        <option value="<?php echo $s->tingkat_risiko ?>" selected><?php echo $s->tingkat_risiko ?></option>
                                        <option value="Rendah">Rendah</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Tinggi">Tinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                                <div class="col-sm-10">
                                    <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"><?php echo $s->solusi ?></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url() . 'Admin/Pages/Manage_Solutions' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                                <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>