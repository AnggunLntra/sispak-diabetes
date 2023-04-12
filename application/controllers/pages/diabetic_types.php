<?php
class Diabetic_Types extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic_types');
        $this->load->view('templates/footer');
    }
}
