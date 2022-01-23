<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
