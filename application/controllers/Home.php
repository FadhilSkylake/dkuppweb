<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }
    public function index()
    {
        $this->data['total_koperasi'] =  $this->Dashboard_model->total_koperasi();
        $this->data['total_pasar'] =  $this->Dashboard_model->total_pasar();
        $this->data['total_perdagangan'] =  $this->Dashboard_model->total_perdagangan();
        $this->data['total_industri'] =  $this->Dashboard_model->total_industri();
        $this->data['total_umkm'] =  $this->Dashboard_model->total_umkm();
        $data['judul'] = 'Home';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/home', $this->data);
        $this->load->view('layout/footer');
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
