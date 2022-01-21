<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Umkm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Umkm_model');

    }

    public function index()
    {
        $data['title'] = 'Umkm';
        $data['umkm'] = $this->Umkm_model->get_data('umkm')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('umkm');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah UMKM';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_umkm', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nama_umkm' => $this->input->post('nama_umkm'),
                'kampung' => $this->input->post('kampung'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'jenis_usaha' => $this->input->post('jenis_usaha'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            );

            $this->Umkm_model->insert_data($data, 'umkm');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('umkm');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('kampung', 'kampung', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('jenis_usaha', 'Jenis Usaha', 'required', array(
            'required' => '%s harus diisi'
        ));
    }
}

/* End of file Umkm.php and path \application\controllers\Umkm.php */
