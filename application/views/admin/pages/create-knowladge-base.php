        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Tambah Basis Pengetahuan</h4>
                    </div>
                </div>
            </nav>

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
                                        <input type="text" class="form-control" id="id_pengetahuan" name="id_pengetahuan">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id_jenis" class="col-sm-4 col-form-label">Id Jenis</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="id_jenis" name="id_jenis">
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
                                        <input type="number" class="form-control" id="nilai_fuzzy" name="nilai_fuzzy">
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