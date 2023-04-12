<?php
class User_Guide extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/user-guide');
        $this->load->view('templates/footer');
    }
}
