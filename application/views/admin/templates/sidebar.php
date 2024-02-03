<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5 bg-danger h-100 shadow">
                <div class="header fs-3 fw-bold text-black text-center mb-3">
                    SIPAKAR
                </div>
                <ul class="navbar-nav list-unstyled components mb-5">
                    <li class="<?php if ($this->uri->uri_string() == 'Admin/Pages/Dashboard') {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Dashboard' ?>"><i class="fa fa-home me-3"></i>Dashboard</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Types') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Types/Create_Types') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Types/Update_Types')) {
                                    echo 'active';
                                }
                                ?>"">
                        <a class=" nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Types' ?>"><i class="fa fa-folder me-3"></i>Data Penyakit</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/Create_Symptoms') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/Update_Symptoms') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/index') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/index/5') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/index/10') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms/index/15')) {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Symptoms' ?>"><i class="fa fa-folder-o me-3"></i>Data Gejala</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Knowladge_Base') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Knowladge_Base/Create_Knowladge_Base') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Knowladge_Base/Update_Knowladge_Base/')) {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Knowladge_Base' ?>"><i class="fa fa-file-text me-3"></i>Basis Pengetahuan</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Solutions') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Conditions/Create_Solutions') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Conditions/Update_Solutions')) {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Solutions' ?>"><i class="fa fa-file me-3"></i>Data Solusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Admin/Pages/Login/Logout') ?>"><i class="fa fa-sign-out me-3"></i>Keluar</a>
                    </li>
                </ul>

            </div>
        </nav>