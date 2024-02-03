<?php
class Test extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengguna');
        $this->load->library('session');
    }

    public function index()
    {
        $data['jenis_kelamin'] = $this->session->userdata('jenis_kelamin');
        $data['nama'] = $this->session->userdata('nama');
        $id_pengguna = $this->M_Pengguna->getId('pengguna', $data['nama']);
        foreach ($id_pengguna as $id) {
            $id_pengguna = $id->id_pengguna;
            $this->session->set_userdata('id_pengguna', $id_pengguna);
        }
        $data['gejala'] = $this->M_Pengguna->getTable('data_gejala');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/test_fc', $data);
        $this->load->view('templates/footer');
    }

    public function forward_chaining()
    {
        $G01 = $this->input->post('G01');
        $G02 = $this->input->post('G02');
        $G03 = $this->input->post('G03');
        $G04 = $this->input->post('G04');
        $G05 = $this->input->post('G05');
        $G06 = $this->input->post('G06');
        $G07 = $this->input->post('G07');
        $G08 = $this->input->post('G08');
        $G09 = $this->input->post('G09');
        $G10 = $this->input->post('G10');
        $G11 = $this->input->post('G11');
        $G12 = $this->input->post('G12');
        $G13 = $this->input->post('G13');
        $G14 = $this->input->post('G14');
        $G15 = $this->input->post('G15');
        $G16 = $this->input->post('G16');
        $G17 = $this->input->post('G17');
        $G18 = $this->input->post('G18');
        $G19 = $this->input->post('G19');

        $totalGejala = 0;
        if ($G01 == 'Ya' && $G02) {
            $totalGejala = 2;


            $data = array(
                '$totalGejala' => $totalGejala,
            );

            $this->M_Sispak->create($data, 'tes_fc');
        };

        redirect('Pages/Result_Test_Page');
    }

    public function test_Fuzzy()
    {
        $nama = $this->session->userdata('nama');
        $id_pengguna = $this->session->userdata('id_pengguna');
        $makan  = $this->input->post('makan');
        $minum  = $this->input->post('minum');
        $bak    = $this->input->post('bak');
        $gejala = $_POST['gejala'];
        $totalGejala = array_sum($gejala);


        // foreach ($gejala as $g) {
        //     if ($g != 0) {

        //         return $totalGejala = $g += $g;
        //     }
        // }

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
            } else if (2 <= $input && $input <= 5) {
                return ($input - 2) / (5 - 2);
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

        //Menentukan Himpunan Setiap Variabel Input dan Output

        //variabel input Makan Normal
        if (1 <= $makan && $makan >= 3) {
            $hMakan = 'Normal';
        }

        //variabel input Makan Sering
        if ($makan <= 3 && (3 < $makan && $makan <= 5) && $makan > 5) {
            $hMakan = 'Sering';
        }

        //variabel input Minum Normal
        if ((1 <= $minum && $minum <= 2) && $makan >= 2) {
            $hMinum = 'Normal';
        }

        //variabel input Minum Banyak
        if ($minum <= 2 && (2 < $minum && $minum <= 3) && $minum > 3) {
            $hMinum = 'Banyak';
        }

        //variabel input BAK Normal
        if (($bak <= 4 or $bak >= 8) && (4 < $bak && $bak <= 6) && (6 < $bak && $bak < 8)) {
            echo $hBAK = 'Normal';
        }

        //variabel input BAK Sering
        if ($bak <= 6 && (6 < $bak && $bak <= 8) && $bak > 8) {
            echo $hBAK = 'Sering';
        }

        $mknNormal = mknNormal($makan);
        $mknSering = mknSering($makan);
        $mnmNormal = mnmNormal($minum);
        $mnmBanyak = mnmBanyak($minum);
        $bakNormal = bakNormal($bak);
        $bakSering = bakSering($bak);
        $tkgRendah = tkgRendah($totalGejala);
        $tkgTinggi = tkgTinggi($totalGejala);
        $totalpersen = persentase($totalGejala);

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


        //Menghitung nilai a-predikat
        // if ($hMakan == "Normal" and $hMinum == "Normal" and $hBAK == "Normal") {
        //     $pred1 = min($mknNormal, $mnmNormal, $bakNormal);
        //     $z1 = $pred1 * 0.25 - 0.5;
        // }
        // if ($hMakan == "Sering" and $hMinum == "Normal" and $hBAK == "Normal") {
        //     $pred2 = min($mknSering, $mnmNormal, $bakNormal);
        //     $z2 = $pred2 * 0.25 + 0.25;
        // }
        // if ($hMakan == "Normal" and $hMinum == "Banyak" and $hBAK == "Normal") {
        //     $pred3 = min($mknNormal, $mnmBanyak, $bakNormal);
        //     $z3 = $pred3 * 0.25 + 0.25;
        // }
        // if ($hMakan == "Sering" and $hMinum == "Banyak" and $hBAK == "Normal") {
        //     $pred4 = min($mknSering, $mnmBanyak, $bakNormal);
        //     $z4 = $pred4 * 0.25 + 0.5;
        // }
        // if ($hMakan == "Normal" and $hMinum == "Normal" and $hBAK == "Sering") {
        //     $pred5 = min($mknNormal, $mnmNormal, $bakSering);
        //     $z5 = $pred5 * 0.25 + 0.25;
        // }
        // if ($hMakan == "Sering" and $hMinum == "Normal" and $hBAK == "Sering") {
        //     $pred6 = min($mknSering, $mnmNormal, $bakSering);
        //     $z6 = $pred6 * 0.25 + 0.5;
        // }
        // if ($hMakan == "Normal" and $hMinum == "Banyak" and $hBAK == "Sering") {
        //     $pred7 = min($mknNormal, $mnmBanyak, $bakSering);
        //     $z7 = $pred7 * 0.25 + 0.5;
        // }
        // if ($hMakan == "Sering" and $hMinum == "Banyak" and $hBAK == "Sering") {
        //     $pred8 = min($mknSering, $mnmBanyak, $bakSering);
        //     $z7 = $pred8 * 0.25 + 0.5;
        // }

        $Z = (($pred1 * $z1) + ($pred2 * $z2) + ($pred3 * $z3) + ($pred4 * $z4) + ($pred5 * $z5) + ($pred6 * $z6) + ($pred7 * $z7) + ($pred8 * $z8)) / ($pred1 + $pred2 + $pred3 + $pred4 + $pred5 + $pred6 + $pred7 + $pred8);


        // variabel output Tingkat Risiko Rendah
        function trRendah($input)
        {
            if ($input >= 50) {
                return $trRendah = 0;
            } else {
                return $trRendah = (50 - $input) / (50 - 1);
            }
        }

        // variabel output Tingkat Risiko Sedang
        function trSedang($input)
        {
            if (25 <= $input && $input <= 50) {
                return $trSedang = ($input - 25) / (50 - 25);
            } else if (50 <= $input && $input <= 75) {
                return $trSedang = (50 - $input) / (75 - 50);
            }
        }

        // variabel output Tingkat Risiko Tinggi
        function trTinggi($input)
        {
            if ($input >= 100) {
                return $trTinggi = 1;
            } else {
                return $trTinggi = ($input - 50) / (100 - 50);
            }
        }

        $trRendah = trRendah($Z);
        $trSedang = trSedang($Z);
        $trTinggi = trTinggi($Z);
        $trHasil = max($trRendah, $trSedang, $trTinggi);
        //cuma buat cek aja
        $pz = ($pred1 * $z1) + ($pred2 * $z2) + ($pred3 * $z3) + ($pred4 * $z4) + ($pred5 * $z5) + ($pred6 * $z6) + ($pred7 * $z7) + ($pred8 * $z8);
        $predT =  $pred1 + $pred2 + $pred3 + $pred4 + $pred5 + $pred6 + $pred7 + $pred8;


        $data = array(
            'nama'  => $nama,
            'id_pengguna' => $id_pengguna,
            'nilai_output'  => $Z,
            'makan'     => $makan,
            'minum'     => $minum,
            'bak'       => $bak,
            'mknNormal'     => $mknNormal,
            'mknSering'     => $mknSering,
            'mnmNormal'     => $mnmNormal,
            'mnmBanyak'     => $mnmBanyak,
            'bakNormal'     => $bakNormal,
            'bakSering'     => $bakSering,
            'tkgRendah'     => $tkgRendah,
            'tkgTinggi'     => $tkgTinggi,
            'p1'     => $pred1,
            'p2'     => $pred2,
            'p3'     => $pred3,
            'p4'     => $pred4,
            'p5'     => $pred5,
            'p6'     => $pred6,
            'p7'     => $pred7,
            'p8'     => $pred8,
            'z1'     => $z1,
            'z2'     => $z2,
            'z3'     => $z3,
            'z4'     => $z4,
            'z5'     => $z5,
            'z6'     => $z6,
            'z7'     => $z7,
            'z8'     => $z8,
            'predT'  => $predT,
            'pz'     => $pz,
        );

        $this->M_Pengguna->Create($data, 'tes_fuzzy');
        redirect('Pages/Result_Test_Page');
    }

    // public function result()
    // {
    //     $data['fuzzy'] = $this->M_Pengguna->getTable('tes_fuzzy');
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/navbar');
    //     $this->load->view('pages/test');
    //     $this->load->view('templates/footer');
    // }
}
