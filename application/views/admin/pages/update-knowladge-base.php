        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div>
                        <h4>Ubah Data Pengetahuan</h4>
                    </div>
                </div>
            </nav>

            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5">
                        <h4 class="text-center">Form Ubah Data</h4>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id_pengetahuan" class="col-sm-4 col-form-label">Id Pengetahuan</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="id_pengetahuan">
                                            <option selected>Pilih Id Pengetahuan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="id_jenis" class="col-sm-4 col-form-label">Id Jenis</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="id_jenis">
                                            <option selected>Pilih Id Jenis</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
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
                                        <select class="custom-select" id="id_gejala">
                                            <option selected>Pilih Id Gejala</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nilai Fuzzy</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="staticEmail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="solusi">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-light border"><i class="fa fa-long-arrow-left"></i><span class="pl-3">Kembali</span></a>
                            <button type="submit" class="btn btn-primary ml-3"><i class="fa fa-save"></i><span class="pl-3">Simpan Perubahan</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>