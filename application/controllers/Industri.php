<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Industri extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Industri_model');

    }

    public function index()
    {
        $data['title'] = 'Industri';
        $data['industri'] = $this->Industri_model->get_data('industri')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('industri');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Industri';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_industri', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
                'ket' => $this->input->post('ket'),
            );

            $this->Industri_model->insert_data($data, 'industri');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('industri');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required', array(
            'required' => '%s harus diisi'
        ));
    }
}

/* End of file Industri.php and path \application\controllers\Industri.php */
