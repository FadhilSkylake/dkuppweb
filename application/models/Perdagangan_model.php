<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Perdagangan_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Perdagangan_model.php and path \application\models\Perdagangan_model.php */
