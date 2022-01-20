<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Umkm extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Umkm';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('umkm');
        $this->load->view('templates/footer');
    }
}

/* End of file Umkm.php and path \application\controllers\Umkm.php */
