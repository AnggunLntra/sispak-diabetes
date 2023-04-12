<?php
class Result_Test extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/result-test');
        $this->load->view('templates/footer');
    }
}
