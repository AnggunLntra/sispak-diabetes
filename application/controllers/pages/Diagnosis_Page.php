<?php
class Diagnosis_Page extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_Pengguna');
    }

    public function index()
    {
        $this->load->model('M_Pengguna');
        $data['gejala'] = $this->M_Pengguna->getTable('gejala');
        $data['totalgejala'] = $this->M_Sispak->getNumRows('gejala');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diagnosis-page', $data);
        $this->load->view('templates/footer');
    }

    public function Diagnosis_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            // $jawaban            = $this->input->post('jawaban[]');
            $jawaban            = $_POST['jawaban'];
            $gejala             = $this->db->query("SELECT gejala FROM gejala")->result_array();

            $totalNilai = 0;
            $jawabanYa = 'Ya';
            $jawabanTidak = 'Tidak';
            $riwayatJawaban = array();
            $riwayatGejala = array();

            foreach ($jawaban as $j) {
                $totalNilai += $j;
                if ($j == 0) {
                    $riwayatJawaban[] = $jawabanTidak;
                } else {
                    $riwayatJawaban[] = $jawabanYa;
                    foreach ($gejala as $g) {
                        $riwayatGejala[] = $g;
                    }
                }
            }


            $data = array(
                'jawaban_konsultasi' => json_encode($jawaban),
                'nilai' => $totalNilai,
                'riwayatJawaban' => json_encode($riwayatJawaban),
                'riwayatGejala' => json_encode($riwayatGejala),
            );

            $this->M_Pengguna->Create($data, 'riwayat_konsultasi');
            redirect('Pages/Result_Test_Page');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jawaban[]', 'Jawaban', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
