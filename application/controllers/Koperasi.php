<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Koperasi extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Koperasi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('koperasi');
        $this->load->view('templates/footer');
    }
}

/* End of file Koperasi.php and path \application\controllers\Koperasi.php */
