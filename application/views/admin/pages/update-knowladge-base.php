        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Pengetahuan</h4>
                    </div>
                    <?php foreach ($pengetahuan as $index => $p) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base_Action/') . $p->kode_pengetahuan ?>">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="kode_pengetahuan" class="col-sm-4 col-form-label">Kode Pengetahuan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_pengetahuan" name="kode_pengetahuan" value="<?php echo $p->kode_pengetahuan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="kode_penyakit" class="col-sm-4 col-form-label">Nama Penyakit</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="kode_penyakit" name="kode_penyakit">
                                                <option value="<?php echo $p->kode_penyakit ?>" selected><?php foreach ($penyakit as $index => $pe) {
                                                                                                                if ($pe['kode_penyakit'] == $p->kode_penyakit) {
                                                                                                                    echo $pe['nama_penyakit'];
                                                                                                                }
                                                                                                            } ?></option>
                                                <?php foreach ($penyakit as $pe) : ?>
                                                    <option value="<?php echo $pe['kode_penyakit'] ?>"><?php echo $pe['nama_penyakit'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_gejala" class="col-sm-2 col-form-label">Gejala</label>
                                <div class="col-sm-10">
                                    <div>
                                        <select class="custom-select" id="kode_gejala" name="kode_gejala">
                                            <option value="<?php echo $p->kode_gejala ?>" selected><?php foreach ($gejala as $index => $g) {
                                                                                                        if ($g['kode_gejala'] == $p->kode_gejala) {
                                                                                                            echo $g['gejala'];
                                                                                                        }
                                                                                                    } ?></option>
                                            <?php foreach ($gejala as $g) : ?>
                                                <option value="<?php echo $g['kode_gejala'] ?>"><?php echo $g['gejala'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url() . 'Admin/Pages/Manage_Knowladge_Base' ?>" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                                <button type="submit" class="btn btn-primary ml-3" onclick="javascript:return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>