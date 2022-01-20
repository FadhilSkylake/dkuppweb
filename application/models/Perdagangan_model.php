<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Perdagangan_model extends CI_Model 
{
    public function select()
    {
        return $this->db->get($table);
    }                        
                        
}


/* End of file Perdagangan_model.php and path \application\models\Perdagangan_model.php */
