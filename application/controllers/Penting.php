<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Penting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penting_model');

    }
    
    public function index()
    {
        $data['title'] = 'Perdagangan Penting';
        $data['penting'] = $this->Penting_model->get_data('perdagangan_penting')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penting');
        $this->load->view('templates/footer');
    }
}

/* End of file Perdagangan.php and path \application\controllers\Perdagangan.php */
