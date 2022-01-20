<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Industri extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Industri';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('industri');
        $this->load->view('templates/footer');
    }
}

/* End of file Industri.php and path \application\controllers\Industri.php */
