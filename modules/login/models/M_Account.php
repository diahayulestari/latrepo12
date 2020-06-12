<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model{
    
    public function get($email){
        $this->db->where('email',$email);
        $result = $this->db->get('users')->row();
        return $result;
    }
}
?>