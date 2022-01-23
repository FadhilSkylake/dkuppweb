<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pasar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasar_model');

    }

    public function index()
    {
        $data['title'] = 'Pasar';
        $data['pasar'] = $this->Pasar_model->get_data('pasar')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pasar');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pasar';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_pasar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        }
        else {
            $data = array(
                'nama_pasar' => $this->input->post('nama_pasar'),
                'jenis_pasar' => $this->input->post('jenis_pasar'),
                'alamat' => $this->input->post('alamat'),
                'ket' => $this->input->post('ket'),
            );

            $this->Pasar_model->insert_data($data, 'pasar');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('pasar');
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
                    'nama_pasar' => $this->input->post('nama_pasar'),
                    'jenis_pasar' => $this->input->post('jenis_pasar'),
                    'alamat' => $this->input->post('alamat'),
                    'ket' => $this->input->post('ket'),
            );
        $this->Pasar_model->update_data($data, 'pasar');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('pasar');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_pasar', 'Nama Pasar', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('jenis_pasar', 'Jenis Pasar', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('ket', 'Ket', 'required', array(
            'required' => '%s harus diisi'
        ));
    }
}

/* End of file Pasar.php and path \application\controllers\Pasar.php */
