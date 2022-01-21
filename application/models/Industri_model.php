<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Industri_model extends CI_Model 
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }        
    
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
                        
}


/* End of file Industri_model.php and path \application\models\Industri_model.php */
