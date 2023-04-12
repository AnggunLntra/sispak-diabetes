<?php
class Contact_Us extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/contact-us');
        $this->load->view('templates/footer');
    }
}
