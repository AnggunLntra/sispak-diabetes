<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5 bg-danger h-100">
                <div class="header fs-3 fw-bold text-center mb-3">
                    SI<span class="text-warning">PAKAR</span>
                </div>
                <ul class="navbar-nav list-unstyled components mb-5">
                    <li class="<?php if ($this->uri->uri_string() == 'Admin/Pages/Dashboard') {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Dashboard' ?>"><i class="fa fa-home me-3"></i>Dashboard</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Types') || ($this->uri->uri_string() == 'Admin/Pages/Create_Types') || ($this->uri->uri_string() == 'Admin/Pages/Update_Types') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Types')) {
                                    echo 'active';
                                }
                                ?>"">
                        <a class=" nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Types' ?>"><i class="fa fa-folder me-3"></i>Jenis Diabetes</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Symptoms') || ($this->uri->uri_string() == 'Admin/Pages/Create_Symptoms') || ($this->uri->uri_string() == 'Admin/Pages/Update_Symptoms') || ($this->uri->uri_string(5))) {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Symptoms' ?>"><i class="fa fa-folder-o me-3"></i>Gejala Diabetes</a>
                    </li>
                    <li class="<?php if (($this->uri->uri_string() == 'Admin/Pages/Manage_Knowladge_Base') || ($this->uri->uri_string() == 'Admin/Pages/Create_Knowladge_Base') || ($this->uri->uri_string() == 'Admin/Pages/Update_Knowladge_Base') || ($this->uri->uri_string() == 'Admin/Pages/Manage_Types')) {
                                    echo 'active';
                                }
                                ?>">
                        <a class="nav-link" href="<?php echo base_url() . 'Admin/Pages/Manage_Knowladge_Base' ?>"><i class="fa fa-book me-3"></i>Basis Pengetahuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>"><i class="fa fa-sign-out me-3"></i>Keluar</a>
                    </li>
                </ul>

            </div>
        </nav>