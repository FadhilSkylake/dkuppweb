<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Home';

        $this->load->view('layout/navbar', $data);
        $this->load->view('front/home');
        $this->load->view('layout/footer');
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
