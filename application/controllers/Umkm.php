<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Umkm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Umkm_model');

    }

    public function index()
    {
        $data['title'] = 'Umkm';
        $data['umkm'] = $this->Umkm_model->get_data('umkm')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('umkm');
        $this->load->view('templates/footer');
    }
}

/* End of file Umkm.php and path \application\controllers\Umkm.php */
