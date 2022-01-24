<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekretariat extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Sekretariat';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sekretariat');
        $this->load->view('templates/footer');

        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }
    }
}

/* End of file Sekretariat.php and path \application\controllers\Sekretariat.php */
