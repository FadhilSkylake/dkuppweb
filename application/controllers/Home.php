<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Home';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/home');
        $this->load->view('layout/footer');
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
