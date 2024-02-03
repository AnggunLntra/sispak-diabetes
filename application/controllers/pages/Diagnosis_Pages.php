<?php
class Diagnosis_Pages extends CI_Controller
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
        $data['user'] = $this->session->userdata('nama');
        $data['gejala'] = $this->M_Pengguna->getTable('data_gejala');
        $id_pengguna = $this->M_Pengguna->getId('pengguna', $data['user']);
        foreach ($id_pengguna as $id) {
            $id_pengguna = $id->id_pengguna;
            $this->session->set_userdata('id_pengguna', $id_pengguna);
        }
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diagnosis', $data);
        $this->load->view('templates/footer');
    }

    public function Diagnosis_Page_Action()
    {
        $this->_rules();
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $nama = $this->session->userdata('nama');
            $umur = $this->session->userdata('umur');
            $id_pengguna = $this->session->userdata('id_pengguna');
            $makan  = $this->input->post('makan');
            $minum  = $this->input->post('minum');
            $bak    = $this->input->post('bak');
            $seringmakan = $this->input->post('G01');
            $seringhaus = $this->input->post('G02');
            $seringbak = $this->input->post('G03');
            $bbturun = $this->input->post('G04');
            $lelah = $this->input->post('G05');
            $kesemutan = $this->input->post('G06');
            $kulitpanas = $this->input->post('G07');
            $kebas = $this->input->post('G08');
            $kram = $this->input->post('G09');
            $kelelahan = $this->input->post('G10');
            $mudahmengantuk = $this->input->post('G11');
            $penglihatankabur = $this->input->post('G12');
            $gigigoyah = $this->input->post('G13');
            $seksualmenurun = $this->input->post('G14');
            $impotensi = $this->input->post('G15');
            $keturunan = $this->input->post('G16');
            $hamil  = $this->input->post('G17');
            $umur_kurang = $this->input->post('G18');
            $umur_lebih = $this->input->post('G19');

            // Menghitung Derajat Keanggotan Setiap Variabel Input dan Output

            //variabel input Makan NORMAL
            function mknNormal($input)
            {
                if ($input >= 5) {
                    return 0;
                } else if (1 <= $input && $input <= 5) {
                    return (5 - $input) / (5 - 1);
                } else {
                    return 1;
                }
            }

            //variabel input Makan SERING
            function mknSering($input)
            {
                if ($input >= 8) {
                    return 1;
                } else if (3 <= $input && $input <= 8) {
                    return ($input - 3) / (8 - 3);
                } else {
                    return 0;
                }
            }

            //variabel input Minum NORMAL
            function mnmNormal($input)
            {
                if ($input >= 3000) {
                    return 0;
                } else if (270 <= $input && $input <= 3000) {
                    return (3000 - $input) / (3000 - 270);
                } else {
                    return 1;
                }
            }

            //variabel input Minum BANYAK
            function mnmBanyak($input)
            {
                if ($input >= 3500) {
                    return 1;
                } else if (2000 <= $input && $input <= 3500) {
                    return ($input - 2000) / (3500 - 2000);
                } else {
                    return 0;
                }
            }

            //variabel input Buang Air Kecil Normal
            function bakNormal($input)
            {
                if ($input >= 2) {
                    return 0;
                } else if (0 <= $input && $input <= 2) {
                    return (2 - $input) / (2 - 0);
                } else {
                    return 1;
                }
            }

            //variabel input Buang Air Kecil SERING
            function bakSering($input)
            {
                if ($input >= 5) {
                    return 1;
                } else if (1 < $input && $input <= 5) {
                    return ($input - 1) / (5 - 1);
                } else {
                    return 0;
                }
            }

            //variabel tingkat keparahan gejala
            function tkgRendah($input)
            {
                if ($input >= 6) {
                    return 0;
                } else if (0 <= $input && $input <= 6) {
                    return (6 - $input) / (6 - 0);
                } else {
                    return 1;
                }
            }

            function tkgTinggi($input)
            {
                if ($input >= 15) {
                    return 1;
                } else if (5 <= $input && $input <= 15) {
                    return ($input - 5) / (15 - 5);
                } else {
                    return 0;
                }
            }

            function persentase($input)
            {
                $total = $input * 100 / 15;
                return $total;
            }

            $mknNormal = mknNormal($makan);
            $mknSering = mknSering($makan);
            $mnmNormal = mnmNormal($minum);
            $mnmBanyak = mnmBanyak($minum);
            $bakNormal = bakNormal($bak);
            $bakSering = bakSering($bak);

            //rule 1
            $pred1 = min($mknNormal, $mnmNormal, $bakNormal);
            $z1 = 0.50 - ($pred1 * 0.49);

            //rule 2
            $pred2 = min($mknSering, $mnmNormal, $bakNormal);
            // $z2 = $pred2 * 25 + 25;
            $z2 = (-0.25 - ($pred2 * 0.25)) * (-1);

            //rule 3
            $pred3 = min($mknNormal, $mnmBanyak, $bakNormal);
            // $z3 = $pred3 * 25 + 25;
            $z3 = (-0.25 - ($pred3 * 0.25)) * (-1);

            //rule 4
            $pred4 = min($mknSering, $mnmBanyak, $bakNormal);
            // $z4 = $pred4 * 25 + 75;
            $z4 = (-0.75 - ($pred4 * 0.25)) * (-1);

            //rule 5
            $pred5 = min($mknNormal, $mnmNormal, $bakSering);
            // $z5 = $pred5 * 25 + 25;
            $z5 = (-0.25 - ($pred5 * 0.25)) * (-1);

            //rule 6
            $pred6 = min($mknSering, $mnmNormal, $bakSering);
            // $z6 = $pred6 * 25 + 75;
            $z6 = (-0.75 - ($pred6 * 0.25)) * (-1);

            //rule 7
            $pred7 = min($mknNormal, $mnmBanyak, $bakSering);
            // $z7 = $pred7 * 25 + 75;
            $z7 = (-0.75 - ($pred7 * 0.25)) * (-1);

            //rule 8
            $pred8 = min($mknSering, $mnmBanyak, $bakSering);
            // $z8 = $pred8 * 25 + 75;
            $z8 = (-0.75 - ($pred8 * 0.25)) * (-1);

            // Menghitung Nilai Output
            $nilai_output = (($pred1 * $z1) + ($pred2 * $z2) + ($pred3 * $z3) + ($pred4 * $z4) + ($pred5 * $z5) + ($pred6 * $z6) + ($pred7 * $z7) + ($pred8 * $z8)) / ($pred1 + $pred2 + $pred3 + $pred4 + $pred5 + $pred6 + $pred7 + $pred8);



            // variabel output Tingkat Risiko Rendah
            function trRendah($input)
            {
                if ($input >= 0.50) {
                    return 0;
                } else {
                    return (0.50 - $input) / (0.50 - 0.01);
                }
            }

            // variabel output Tingkat Risiko Sedang
            function trSedang($input)
            {
                if (0.25 <= $input && $input <= 0.5) {
                    return ($input - 0.25) / (0.50 - 0.25);
                } else if (0.50 <= $input && $input <= 0.75) {
                    return (0.50 - $input) / (0.75 - 0.50);
                }
            }

            // variabel output Tingkat Risiko Tinggi
            function trTinggi($input)
            {
                if ($input >= 1) {
                    return 1;
                } else {
                    return ($input - 0.50) / (1 - 0.50);
                }
            }

            //Diabetes Tipe A

            if ($umur <= 30 && ($keturunan == 'Ya' || $seringmakan == 'Ya' || $seringhaus == 'Ya' || $seringbak == 'Ya' || $bbturun == 'Ya' || $lelah == 'Ya' || $kesemutan == 'Ya' || $kulitpanas == 'Ya' || $kebas == 'Ya' || $kram == 'Ya' || $kelelahan == 'Ya' || $mudahmengantuk == 'Ya' || $penglihatankabur == 'Ya' || $gigigoyah == 'Ya'  || $seksualmenurun == 'Ya' || $impotensi == 'Ya')) {
                $jenisDiabetes = 'TDM01';
            } else if ($umur >= 30 && ($keturunan == 'Ya' || $seringmakan == 'Ya' || $seringhaus == 'Ya' || $seringbak == 'Ya' || $bbturun == 'Ya' || $lelah == 'Ya' || $kesemutan == 'Ya' || $kulitpanas == 'Ya' || $kebas == 'Ya' || $kram == 'Ya' || $kelelahan == 'Ya' || $mudahmengantuk == 'Ya' || $penglihatankabur == 'Ya' || $gigigoyah == 'Ya'  || $seksualmenurun == 'Ya' || $impotensi == 'Ya')) {
                $jenisDiabetes = 'TDM02';
            } else if ($hamil == 'Ya' && ($keturunan == 'Ya' || $umur <= 30 || $umur_lebih >= 30 || $seringmakan == 'Ya' || $seringhaus == 'Ya' || $seringbak == 'Ya' || $bbturun == 'Ya' || $lelah == 'Ya' || $kesemutan == 'Ya' || $kulitpanas == 'Ya' || $kebas == 'Ya' || $kram == 'Ya' || $kelelahan == 'Ya' || $mudahmengantuk == 'Ya' || $penglihatankabur == 'Ya' || $gigigoyah == 'Ya'  || $seksualmenurun == 'Ya' || $impotensi == 'Ya')) {
                $jenisDiabetes = 'TDM03';
            }

            // Diabetes Tipe B

            // if ($keturunan == 'Ya' && $umur_lebih == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya') {
            //     $jenisDiabetes = 'TDM02';
            // }

            // Diabetes Tipe C

            // if ($keturunan == 'Ya' && $hamil == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // } else if ($keturunan == 'Ya' && $umur_lebih == 'Ya' && $seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya') {
            //     $jenisDiabetes = 'TDM03';
            // }

            // if ($seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya' && $keturunan == 'Ya' && $umur_kurang == 'Ya') {
            //     $jenispenyakit = 'TDM01';
            // } else if ($seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $keturunan == 'Ya' && $umur_kurang == 'Ya') {
            //     $jenispenyakit = 'TDM01';
            // } else if ($seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $seksualmenurun == 'Ya' && $impotensi == 'Ya' && $keturunan == 'Ya' && $umur_lebih == 'Ya') {
            //     $jenispenyakit = 'TDM02';
            // } else if ($seringmakan == 'Ya' && $seringhaus == 'Ya' && $seringbak == 'Ya' && $bbturun == 'Ya' && $lelah == 'Ya' && $kesemutan == 'Ya' && $kulitpanas == 'Ya' && $kebas == 'Ya' && $kram == 'Ya' && $kelelahan == 'Ya' && $mudahmengantuk == 'Ya' && $penglihatankabur == 'Ya' && $gigigoyah == 'Ya' && $keturunan == 'Ya' && $hamil == 'Ya') {
            //     $jenispenyakit = 'TDM03';
            // }

            // Cara lain

            // if ($hamil == 'Ya') {
            //     $penyakit = 'TDM03';
            // } else if ($hamil == 'Ya' && $umur_kurang == 'Ya') {
            //     $penyakit = 'TDM03';
            // } else if ($hamil == 'Ya' && $umur_lebih == 'Ya') {
            //     $penyakit = 'TDM03';
            // } else if ($umur_kurang == 'Ya') {
            //     $penyakit = 'TDM01';
            // } else if ($umur_lebih == 'Ya') {
            //     $penyakit = 'TDM02';
            // } else if ($umur < 30) {
            //     $penyakit = 'TDM01';
            // } else if ($umur > 30) {
            //     $penyakit = 'TDM02';
            // }

            if ($nilai_output >= 0.75) {
                $risiko = 'Tinggi';
            } else if ($nilai_output >= 0.25 && $nilai_output <= 0.75) {
                $risiko = 'Sedang';
            } else {
                $risiko = 'Rendah';
            }

            if ($risiko == 'Rendah'  && $jenisDiabetes == 'TDM03') {
                $solusi = 'Lakukan pemeriksaan secara rutin kadar gula dalam tubuh';
            } else if ($risiko == 'Sedang' && $jenisDiabetes == 'TDM03') {
                $solusi = 'Lakukan program diet sehat dan olahraga secara teratur';
            } else if ($risiko == 'Tinggi' && $jenisDiabetes == 'TDM03') {
                $solusi = 'Konsumsi obat-obatan yang dapat membantu mengontrol gula darah sesuai anjuran dokter';
            } else if ($risiko == 'Rendah' && $jenisDiabetes == 'TDM02') {
                $solusi = 'Olahraga secara teratur dan sering lakukan aktivitas fisik, kurangi duduk atau diam terlalu lama dan mengindari atau berhenti merokok';
            } else if ($risiko == 'Sedang' && $jenisDiabetes == 'TDM02') {
                $solusi = 'Konsumsi makanan rendah lemak dan berserat tinggi seperti buah dan sayuran';
            } else if ($risiko == 'Tinggi' && $jenisDiabetes == 'TDM02') {
                $solusi = 'Membatasi konsumsi makanan dan minuman manis';
            } else if ($risiko == 'Rendah' && $jenisDiabetes == 'TDM01') {
                $solusi = 'Menjaga pola makan sehat dan olahraga yang teratur';
            } else if ($risiko == 'Sedang' && $jenisDiabetes == 'TDM01') {
                $solusi = 'Pemberian hormon tertentu dengan cara menyuntikkan pada bagian lapisan bawah kulit sekitarnya 3-4 kali sehari sesuai dosis yang dianjurkan dokter untuk mengontrol gula darah';
            } else if ($risiko == 'Tinggi' && $jenisDiabetes == 'TDM01') {
                $solusi = 'Merawat kebersihan kaki dan melakukan pemeriksaan mata secara berkala dalam tahap upaya mencegah komplikasi lebih lanjut.';
            }

            $data = array(
                'id_pengguna'       => $id_pengguna,
                'nama_pengguna'     => $nama,
                'hasil_output'      => $nilai_output,
                'tingkat_risiko'    => $risiko,
                'kode_penyakit'     => $jenisDiabetes,
                'solusi'            => $solusi,
            );

            $this->M_Pengguna->Create($data, 'hasil_diagnosis');
            redirect('Pages/Diagnosis_Pages/Result_Diagnosis');
        }
    }

    public function Result_Diagnosis()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['umur'] = $this->session->userdata('umur');
        $data['jenis_kelamin'] = $this->session->userdata('jenis_kelamin');
        $data['id_pengguna'] = $this->session->userdata('id_pengguna');
        $data['hasil_diagnosis'] = $this->M_Pengguna->getResult('hasil_diagnosis', $data['nama'], $data['id_pengguna']);
        $kode_penyakit = $data['hasil_diagnosis'];
        foreach ($kode_penyakit as $kp) {
            $kode_penyakit = $kp->kode_penyakit;
        }
        $data['penyakit'] = $this->db->query("SELECT nama_penyakit FROM data_penyakit WHERE kode_penyakit = '$kode_penyakit'")->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/result-test-page', $data);
        $this->load->view('templates/footer');
    }

    public function delete_data($id_konsultasi)
    {
        // $id = array('id_konsultasi' => $id_konsultasi);
        $id = $id_konsultasi;
        $this->db->query("DELETE pengguna, hasil_diagnosis FROM pengguna JOIN hasil_diagnosis ON pengguna.id_pengguna = hasil_diagnosis.id_pengguna WHERE pengguna.id_pengguna = $id");
        // $this->M_Sispak->Delete('tes_fuzzy', $id);
        redirect('home');
    }

    public function _rules()
    {

        $this->form_validation->set_rules('makan', 'Jumlah makan', 'required');
        $this->form_validation->set_rules('minum', 'Jumlah minum', 'required');
        $this->form_validation->set_rules('bak', 'Jumlah buang air kecil dimalam hari', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
