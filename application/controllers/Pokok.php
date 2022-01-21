<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pokok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pokok_model');

    }
    
    public function index()
    {
        $data['title'] = 'Perdagangan Pokok';
        $data['pokok'] = $this->Pokok_model->get_data('perdagangan_pokok')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pokok');
        $this->load->view('templates/footer');
    }
}

/* End of file Perdagangan.php and path \application\controllers\Perdagangan.php */
