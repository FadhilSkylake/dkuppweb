<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pasar extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Pasar';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasar');
        $this->load->view('templates/footer');
    }
}

/* End of file Pasar.php and path \application\controllers\Pasar.php */
