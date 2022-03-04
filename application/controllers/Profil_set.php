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

    public function edit($id)
    {
        // $this->_rules();


        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id' => $id,
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'tugas_pokok' => $this->input->post('tugas_pokok'),
                'fungsi' => $this->input->post('fungsi'),
            );

            $this->Profil_model->update_data($data, 'profil_set');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('profil_set');
        }
    }
}

/* End of file Profil_set.php and path \application\controllers\Profil_set.php */
