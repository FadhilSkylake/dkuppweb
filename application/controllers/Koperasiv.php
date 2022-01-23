<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasiv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Koperasi';

        $this->load->view('layout/navbar', $data);
        $this->load->view('front/koperasi');
        $this->load->view('layout/footer');
    }
}

/* End of file Koperasiv.php and path \application\controllers\Koperasiv.php */
