<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_set extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->library('pagination');

        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Setting';
        $data['profil'] = $this->Profil_model->get_data('profil_front')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil_set', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Profil_set.php and path \application\controllers\Profil_set.php */
