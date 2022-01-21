<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Login DKUPP';
        // $data['koperasi'] = $this->Koperasi_model->get_data('koperasi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('login', $data);
    }
}

/* End of file Login.php and path \application\controllers\Login.php */
