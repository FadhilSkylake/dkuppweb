<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritav extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Berita';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/berita');
        $this->load->view('layout/footer');
    }
}

/* End of file Beritav.php and path \application\controllers\Beritav.php */
