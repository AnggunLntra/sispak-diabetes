<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Knowladge_Base extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-knowladge-base');
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-knowladge-base');
        $this->load->view('admin/templates/footer');
    }

    public function Update_Knowladge_Base()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-knowladge-base');
        $this->load->view('admin/templates/footer');
    }
}
