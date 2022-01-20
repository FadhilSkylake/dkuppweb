<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Koperasi_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Koperasi_model.php and path \application\models\Koperasi_model.php */
