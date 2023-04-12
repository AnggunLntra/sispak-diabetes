<?php
class Diabetic_Symptoms extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic-symptoms');
        $this->load->view('templates/footer');
    }
}
