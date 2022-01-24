<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Perindustrianv extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Perindustrian';

        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/header');
        $this->load->view('front/perindustrian');
        $this->load->view('layout/footer'); 
    }
}

/* End of file Perindustrianv.php and path \application\controllers\Perindustrianv.php */
