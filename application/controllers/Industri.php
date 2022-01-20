<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Industri extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Industri_model');

    }

    public function index()
    {
        $data['title'] = 'Industri';
        $data['industri'] = $this->Industri_model->get_data('industri')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('industri');
        $this->load->view('templates/footer');
    }
}

/* End of file Industri.php and path \application\controllers\Industri.php */
