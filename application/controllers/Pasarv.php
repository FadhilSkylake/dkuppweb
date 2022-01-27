<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasarv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Pasar';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/pasar');
        $this->load->view('layout/footer');
    }
}

/* End of file Pasarv.php and path \application\controllers\Pasarv.php */
