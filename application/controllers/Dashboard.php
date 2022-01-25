<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard';
        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $this->data);
        $this->load->view('templates/footer');
    }

    // public function hitungkoperasi()
    // {
    //     $this->data['total_koperasi'] =  $this->Dashboard_model->total_rows();
    // }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
