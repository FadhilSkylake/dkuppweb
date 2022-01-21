<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Penting_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Ppenting_model.php and path \application\models\Ppenting_model.php */
