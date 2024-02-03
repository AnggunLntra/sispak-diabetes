<div class="container-fluid bg-white">
    <div class="row align-items-center justify-content-center ">
        <div class="col-md-3 d-flex align-items-center justify-content-center min-vh-100">
            <div class="card w-100 py-3 border-0">
                <div class="card-body">
                    <div class="d-grid gap-5">
                        <div class="h4 fw-bolder text-center text-dark text-uppercase">
                            sipakar
                        </div>
                        <div class="h5 fw-semibold text-danger">
                            Masuk admin
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger small" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>
                    <form method="POST" action="<?php echo base_url('Admin/Pages/Login/Login_Admin') ?>">
                        <div class="d-grid gap-1">
                            <div class="form-group">
                                <!-- <label for="username" class="form-label fw-semibold text-secondary">Username</label> -->
                                <input type="text" id="username" name="username" class="form-control bg-light border-0" placeholder="Nama pengguna">
                                <span class="small text-danger fst-italic"><?php echo form_error('username'); ?></span>
                            </div>
                            <div class="form-group">
                                <!-- <label for="password" class="form-label fw-semibold text-secondary">Password</label> -->
                                <input type="password" id="password" name="password" class="form-control bg-light border-0" placeholder="Kata sandi">
                                <span class="small text-danger fst-italic"><?php echo form_error('password'); ?></span>
                            </div>
                            <div class="d-grid gap-1">
                                <button type="submit" class="btn btn-danger fw-semibold">Masuk</button>
                                <a href="<?php echo base_url() ?>" class="fw-semibold text-secondary text-center">Kembali ke beranda</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>