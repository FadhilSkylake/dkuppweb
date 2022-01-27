<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkmv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'UMKM';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/umkm');
        $this->load->view('layout/footer');
    }
}

/* End of file Umkmv.php and path \application\controllers\Umkmv.php */
