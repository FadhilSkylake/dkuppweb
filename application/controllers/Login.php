<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Login DKUPP';
        // $data['koperasi'] = $this->Koperasi_model->get_data('koperasi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('login', $data);
    }

    function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $cekuserdaftar = $this->Login_model->cekuserdaftar($username);
        if ($cekuserdaftar) {

            $ceklogin = $this->Login_model->ceklogin($username, $password);
            if ($ceklogin) {
                $this->session->set_userdata('username', $ceklogin->username);
                $this->session->set_userdata('level', $ceklogin->level);
                $this->session->set_userdata('akun', $ceklogin->akun);

                if ($this->session->userdata('level') == "1") {
                    redirect('Dashboard', 'refresh');
                } elseif ($this->session->userdata('level') == "2") {
                    redirect('Koperasi', 'refresh');
                } elseif ($this->session->userdata('level') == "3") {
                    redirect('Penting', 'refresh');
                } elseif ($this->session->userdata('level') == "4") {
                    redirect('Industri', 'refresh');
                } elseif ($this->session->userdata('level') == "5") {
                    redirect('Umkm', 'refresh');
                } elseif ($this->session->userdata('level') == "6") {
                    redirect('Pasar', 'refresh');
                }
                // elseif ($this->session->userdata('username', 'password') != "$row"); {
                //     echo "<script>alert('salah');</script>";
                //     redirect('Login', 'refresh');
                // }
                else {
                }
            } else {
            }
        } else {
        }
        echo "<script>alert('salah');</script>";
        redirect('login', 'refresh');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Login.php and path \application\controllers\Login.php */
