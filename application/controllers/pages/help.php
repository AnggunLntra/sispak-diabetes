<?php
class Help extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/help');
        $this->load->view('templates/footer');
    }
}
