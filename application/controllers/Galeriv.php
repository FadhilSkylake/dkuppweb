<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeriv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Galeri';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/galeri');
        $this->load->view('layout/footer');
    }
}

/* End of file Galeriv.php and path \application\controllers\Galeriv.php */
