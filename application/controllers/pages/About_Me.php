<?php
class About_Me extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/about_me');
        $this->load->view('templates/footer');
    }
}
