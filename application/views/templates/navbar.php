<body>
    <nav class="navbar navbar-expand-md navbar-danger fixed-top bg-danger py-lg-3">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase fw-bolder text-light" href="#">Sipakar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('pages/test_page') ?>">Diagnosis Diabetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('pages/diabetic_symptoms') ?>">Gejala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('pages/diabetic_types') ?>">Tipe Diabetes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('pages/user_guide') ?>">Cara Penggunaan</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('pages/contact_us') ?>">Kontak Kami</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('pages/help') ?>">Bantuan</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>