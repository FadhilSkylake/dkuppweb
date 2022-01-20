<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Perdagangan extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Perdagangan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perdagangan');
        $this->load->view('templates/footer');
    }
}

/* End of file Perdagangan.php and path \application\controllers\Perdagangan.php */
