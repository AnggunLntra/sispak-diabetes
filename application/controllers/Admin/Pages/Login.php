<?php
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('M_Login');
    }

    public function index()
    {
        $data['halaman'] = 'Login';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/login');
    }

    public function login_admin()
    {
        $this->_rules();
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');

            $where = array(
                'username' => $username,
                'password' => $password,
            );

            $cek = $this->M_Login->cek_login("admin", $where)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                );
                $this->session->set_userdata($data_session);
                redirect('Admin/Pages/Dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect('Admin/Pages/Login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/Pages/Login');
    }

    // public function proses(){
    //     $this->_rules();

    //     if($this->form_validation->run() == FALSE){
    //         if(isset($this->session->userdata['logged_in'])){
    //             redirect('Admin/Pages/Dashboard');
    //         } else {
    //             redirect('Admin/Pages/Login');
    //         }
    //     } else {
    //         $data = array(
    //             'username'  =>$this->input->post('username')
    //             'password'  =>$this->input->post('password'),
    //         );
    //         $result = $this->M_Sispak->Read($username);
    //         if($result != false){
    //             $session_data = array(
    //                 'username' = $result[0]->user_username,
    //                 'password' = $result[0]->user_password,
    //             );
    //             $this->session->set_userdata('logged_in', $session_data);
    //             redirect('Admin/Pages/Dashboard');
    //         } else {
    //             $data = array (
    //                 'pesan_error' => "invalid username or password";
    //             );
    //             redirect('Admin/Pages/Login',$data);
    //         }
    //     } 
    // }

    public function proses()
    {

        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        if ($this->Auth->login_user($username, $password)) {
            redirect('Admin/Pages/Dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('Admin/Pages/Login');
        }
    }

    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('nama');
    //     $this->session->unset_userdata('is_login');
    //     redirect('Admin/Pages/Login');
    // }

    // public function login_validation()
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run()) {
    //         $username = $this->input->post('username');
    //         $password = $this->input->post('password');

    //         if ($this->M_Sispak->login($username, $password)) {
    //             $session_data = array(
    //                 'username' => $username,
    //                 'password' => $password
    //             );

    //             $this->session->set_userdata($session_data);
    //             redirect('Admin/Pages/Dashboard');
    //         } else {
    //             $this->session->set_flashdata('error', 'invalid username and password');
    //         }
    //     } else {
    //         $this->login_validation();
    //     }
    // }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
