<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Koperasi_model');
        $this->load->library('pagination');

        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Koperasi';
        $data['koperasi'] = $this->Koperasi_model->get_data('koperasi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('koperasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Koperasi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_koperasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'jenis_koperasi' => $this->input->post('jenis_koperasi'),
                'nama_koperasi' => $this->input->post('nama_koperasi'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
            );

            $this->Koperasi_model->insert_data($data, 'koperasi');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('koperasi');
        }
    }

    public function edit($no)
    {
        $this->_rules();


        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'no' => $no,
                'jenis_koperasi' => $this->input->post('jenis_koperasi'),
                'nama_koperasi' => $this->input->post('nama_koperasi'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
            );

            $this->Koperasi_model->update_data($data, 'koperasi');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('koperasi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis_koperasi', 'Jenis Koperasi', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('nama_koperasi', 'Nama Koperasi', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('desa', 'Desa', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s harus diisi'
        ));
    }
}

/* End of file Koperasi.php and path \application\controllers\Koperasi.php */
// <div class="alert alert-success alert-dismissible fade show" role="alert">
//                  <h4 class="alert-heading">Well done!</h4>
//                  <p>Berhasil Tambah Data !!!</p>
//                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//                  <span aria-hidden="true">&times;</span>
//                  </button>
//                  <hr>
//                  </div>