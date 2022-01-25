<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function total_koperasi()
    {
        return $this->db->get('koperasi')->num_rows();
    }

    function total_pasar()
    {
        return $this->db->get('pasar')->num_rows();
    }
    function total_perdagangan()
    {
        return $this->db->get('perdagangan_penting')->num_rows();
    }
    function total_industri()
    {
        return $this->db->get('industri')->num_rows();
    }
    function total_umkm()
    {
        return $this->db->get('umkm')->num_rows();
    }
}


/* End of file Dashboard_model.php and path \application\models\Dashboard_model.php */
