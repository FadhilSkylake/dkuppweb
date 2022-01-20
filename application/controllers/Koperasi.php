<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Koperasi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Koperasi_model');
        $this->load->library('pagination');
    }
    
    public function index()
    {
        $data['title'] = 'Koperasi';
        $data['koperasi'] = $this->Koperasi_model->get_data('koperasi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('koperasi', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Koperasi.php and path \application\controllers\Koperasi.php */
