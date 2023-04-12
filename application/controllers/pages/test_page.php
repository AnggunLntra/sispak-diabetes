<?php
class Test_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/test-page');
        $this->load->view('templates/footer');
    }
}
