<div class="container pt-5">
    <div class="row flex-wrap-reverse">
        <div class="col-lg-6 d-flex mb-5 mb-lg-0 pt-sm-5">
            <div class="align-self-center">
                <h1 class="fw-bold">Selamat Datang di <span class="text-uppercase text-danger">sipakar</span></h1>
                <p class="fw-light">Sistem pakar diagnosis diabetes berbasis web menggunakan metode <span class="fw-bold fst-italic">fuzzy inference system</span> dan <span class="fw-bol fst-italicd">forward chaining</span></p>
                <div class="mt-4">
                    <p class="mb-2">Klik tombol dibawah ini untuk memulai tes :</p>
                    <a href="<?php echo base_url('pages/test_page') ?>" class="btn btn-danger">Mulai Tes</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 py-lg-5">
            <img src="<?php echo base_url() ?>assets/img/img-diabetes-symptoms.jpg" alt="" class="img-fluid w-100">
        </div>
    </div>
    <div class="row bg-light py-lg-5 py-2">
        <div class="col-lg-5">
            <span class="fw-bold fs-5">Tentang <span class="text-uppercase text-danger">sipakar</span></span>
            <p>Sipakar adalah sistem pakar berbasis website yang dibuat dengan tujuan untuk memudahkan masyarakat dalam melakukan diagnosis secara dini penyakit yang diderita.
                <br />Untuk saat ini sipakar hanya dapat melakukan diagnosis secara dini penyakit diabetes melitus berdasarkan gejala-gejala yang biasa dialami oleh kebanyakan penderita penyakit diabetes.
            </p>
        </div>
        <div class="col-lg-7">
            <span class="fw-bold fs-5">Menu <span class="text-uppercase text-danger">sipakar</span></span>
            <p>Terdapat beberapa menu yang ada didalam website <span class="text-uppercase text-danger">sipakar</span> yaitu :</p>
            <div class="row">
                <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                    <a class="btn card bg-danger text-center shadow link-underline-opacity-0 link-underline" href="<?php echo base_url('pages/test_page') ?>">
                        <div class="card-body text-white text-center">
                            <span class="fw-bold">Diagnosis Diabetes</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                    <a class="btn card bg-secondary text-center shadow link-underline-opacity-0 link-underline" href="<?php echo base_url('pages/user_guide') ?>">
                        <div class="card-body">
                            <span class="fw-bold text-white">Cara Penggunaan</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                    <a class="btn card bg-danger text-center shadow link-underline-opacity-0 link-underline" href="<?php echo base_url('pages/diabetic_types') ?>">
                        <div class="card-body text-white">
                            <span class="fw-bold">Tipe Diabetes</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                    <a class="btn card bg-secondary text-center shadow link-underline-opacity-0 link-underline" href="<?php echo base_url('pages/diabetic_sysptoms') ?>">
                        <div class="card-body text-white">
                            <span class="fw-bold">Gejala Diabetes</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>