<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pasar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasar_model');

    }

    public function index()
    {
        $data['title'] = 'Pasar';
        $data['pasar'] = $this->Pasar_model->get_data('pasar')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasar');
        $this->load->view('templates/footer');
    }
}

/* End of file Pasar.php and path \application\controllers\Pasar.php */
