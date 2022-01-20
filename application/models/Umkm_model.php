<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Umkm_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Umkm_model.php and path \application\models\Umkm_model.php */
