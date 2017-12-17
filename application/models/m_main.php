<?php
class m_main extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	public function getAllData()
    {
	
		$query = $this->db->get('videoamv');

        // Return the results.
        return $query->result_array();
	}
}