<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perdaganganv extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Perdagangan';

        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/header');
        $this->load->view('front/perdagangan');
        $this->load->view('layout/footer'); 
    }
}

/* End of file Perdaganganv.php and path \application\controllers\Perdaganganv.php */
