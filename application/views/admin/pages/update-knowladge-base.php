        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Data</h4>
                    </div>
                    <?php foreach ($basis_pengetahuan as $bp) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base_Action/') . $bp->id_pengetahuan ?>">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="id_pengetahuan" class="col-sm-4 col-form-label">Id Pengetahuan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="id_pengetahuan" name="id_pengetahuan" value="<?php echo $bp->id_pengetahuan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="id_jenis" class="col-sm-4 col-form-label">Id Jenis</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="id_jenis" name="id_jenis">
                                                <option value="<?php echo $bp->id_jenis ?>" selected><?php echo $bp->id_jenis ?></option>
                                                <?php foreach ($jenis_diabetes as $jns) : ?>
                                                    <option value="<?php echo $jns['id_jenis'] ?>"><?php echo $jns['id_jenis'] ?> (<?php echo $jns['jenis_dm'] ?>)</option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="id_gejala" class="col-sm-4 col-form-label">Id Gejala</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="id_gejala" name="id_gejala">
                                                <option value="<?php echo $bp->id_gejala ?>" selected><?php echo $bp->id_gejala ?></option>
                                                <?php foreach ($gejala as $gjl) : ?>
                                                    <option value="<?php echo $gjl['id_gejala'] ?>"><?php echo $gjl['id_gejala'] ?> (<?php echo $gjl['gejala'] ?>)</option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="nilai_fuzzy" class="col-sm-4 col-form-label">Nilai Fuzzy</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="nilai_fuzzy" name="nilai_fuzzy" value="<?php echo $bp->nilai_fuzzy ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" id="solusi" name="solusi">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div> -->
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