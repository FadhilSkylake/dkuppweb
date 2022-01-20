<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pasar_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Pasar_model.php and path \application\models\Pasar_model.php */
