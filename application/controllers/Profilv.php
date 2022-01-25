<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilv extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Profil';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/profil');
        $this->load->view('layout/footer');
    }
}

/* End of file Profilv.php and path \application\controllers\Profilv.php */
