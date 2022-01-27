<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Produkv extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Produk';

        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('front/produk');
        $this->load->view('layout/footer'); 
    }
}

/* End of file Produkv.php and path \application\controllers\Produkv.php */
