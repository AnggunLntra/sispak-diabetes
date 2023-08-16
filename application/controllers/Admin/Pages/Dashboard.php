<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->model('m_sispak');
        $data['gejala'] = $this->m_sispak->getNumRowsGejala();
        $data['jenis_diabetes'] = $this->m_sispak->getNumRowsJenis();
        $data['basis_pengetahuan'] = $this->m_sispak->getNumRowsPengetahuan();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }
}
