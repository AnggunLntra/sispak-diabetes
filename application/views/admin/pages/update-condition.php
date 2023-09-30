        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php $this->view('admin/templates/navbar'); ?>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Data</h4>
                    </div>
                    <?php foreach ($kondisi as $kds) : ?>
                        <form method="POST" action="<?php echo base_url('Admin/Pages/Manage_Conditions/Update_Conditions_Action/') . $kds->id_kondisi ?>">
                            <div class=" form-group row">
                                <label for="id_kondisi" class="col-sm-2 col-form-label">ID Kondisi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_kondisi" name="id_kondisi" value="<?php echo $kds->id_kondisi ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                                <div class="col-sm-10">
                                    <textarea name="kondisi" id="kondisi" class="form-control" cols="30" rows="5"><?php echo $kds->kondisi ?></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                                <button type="submit" class="btn btn-primary ml-3" onclick="javascript: return confirm('Simpan Perubahan?')"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>