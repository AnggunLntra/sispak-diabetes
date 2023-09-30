        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Tambah Basis Pengetahuan</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Knowladge_Base/Create_Knowladge_Base_Action') ?>">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id_pengetahuan" class="col-sm-4 col-form-label">Id Pengetahuan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="id_pengetahuan" name="id_pengetahuan" value="<?php echo set_value('id_pengetahuan'); ?>">
                                        <span class="small text-danger fst-italic"><?php echo form_error('id_pengetahuan'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="jenis_dm" class="col-sm-4 col-form-label">Jenis Diabetes</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="jenis_dm" name="jenis_dm">
                                            <option value="0" selected>Pilih Jenis Diabetes</option>
                                            <?php foreach ($jenis_diabetes as $jns) : ?>
                                                <option value="<?php echo $jns['jenis_dm'] ?>"><?php echo $jns['jenis_dm'] ?> (<?php echo $jns['jenis_dm'] ?>)</option>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="small text-danger fst-italic"><?php echo form_error('jenis_dm'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="gejala" class="col-sm-4 col-form-label">Gejala Diabetes</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="ejala" name="gejala">
                                            <option value="0" selected>Pilih Gejala Diabetes</option>
                                            <?php foreach ($gejala as $gjl) : ?>
                                                <option value="<?php echo $gjl['gejala'] ?>"><?php echo $gjl['gejala'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="small text-danger fst-italic"><?php echo form_error('gejala'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nilai_fuzzy" class="col-sm-4 col-form-label">Nilai Keanggotaan</label>
                                    <div class="col-sm-8">
                                        <!-- <input type="number" class="form-control" id="nilai_fuzzy" name="nilai_fuzzy" value="<?php echo set_value('nilai_fuzzy') ?>"> -->
                                        <input type="number" class="form-control" id="nilai_fuzzy" name="nilai_fuzzy" value="">
                                        <span class="small text-danger fst-italic"><?php echo form_error('nilai_fuzzy'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="solusi" name="solusi">
                                    <?php foreach ($jenis_diabetes as $jns) : ?>
                                        <option value="<?php echo $jns['solusi'] ?>"><?php echo $jns['solusi'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div> -->
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Data?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Data</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>