<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pokok_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Pokok_model.php and path \application\models\Pokok_model.php */
