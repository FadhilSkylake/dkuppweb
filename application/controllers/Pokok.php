<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pokok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pokok_model');

        if ($this->session->userdata('level') == null) {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Perdagangan Pokok';
        $data['pokok'] = $this->Pokok_model->get_data('perdagangan_pokok')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pokok');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Bahan Pokok';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_pokok', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_bahan_pokok' => $this->input->post('nama_bahan_pokok'),
                'volume' => $this->input->post('volume'),
                'harga_kemarin' => $this->input->post('harga_kemarin'),
                'harga_hari_ini' => $this->input->post('harga_hari_ini'),
                'perubahan' => $this->input->post('perubahan'),
                'ket' => $this->input->post('ket'),
            );

            $this->Pokok_model->insert_data($data, 'perdagangan_pokok');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('pokok');
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
                'nama_bahan_pokok' => $this->input->post('nama_bahan_pokok'),
                'volume' => $this->input->post('volume'),
                'harga_kemarin' => $this->input->post('harga_kemarin'),
                'harga_hari_ini' => $this->input->post('harga_hari_ini'),
                'perubahan' => $this->input->post('perubahan'),
                'ket' => $this->input->post('ket'),
            );

            $this->Pokok_model->update_data($data, 'perdagangan_pokok');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('pokok');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_bahan_pokok', 'Nama Bahan Pokok', 'required', array(
            'required' => '%s harus diisi'
        ));
    }

    public function delete($no)
    {
        $where = array('no' => $no);
        $this->Pokok_model->delete($where, 'perdagangan_pokok');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('pokok');
    }


}

/* End of file Perdagangan.php and path \application\controllers\Perdagangan.php */
