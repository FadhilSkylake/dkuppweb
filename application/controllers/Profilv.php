<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->library('pagination');
    }
    public function index()
    {
        $data['judul'] = 'Profil';
        $data['profil'] = $this->Profil_model->get_data('profil_front')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/profil');
        $this->load->view('layout/footer');
    }
}

/* End of file Profilv.php and path \application\controllers\Profilv.php */
