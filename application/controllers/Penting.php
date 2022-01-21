<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Penting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penting_model');

    }
    
    public function index()
    {
        $data['title'] = 'Perdagangan Penting';
        $data['penting'] = $this->Penting_model->get_data('perdagangan_penting')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penting');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Bahan Penting';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_penting', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'komoditi' => $this->input->post('komoditi'),
                'satuan' => $this->input->post('satuan'),
                'harga' => $this->input->post('harga'),
                'ket' => $this->input->post('ket'),
            );
            // ini database
            $this->Penting_model->insert_data($data, 'perdagangan_penting');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('penting');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('komoditi', 'Komoditi', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('satuan', 'Satuan', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('harga', 'Harga', 'required', array(
            'required' => '%s harus diisi'
        ));
    }    
}

/* End of file Perdagangan.php and path \application\controllers\Perdagangan.php */
