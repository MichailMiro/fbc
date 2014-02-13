<?php
Class Careers_model extends CI_Model
{
        
	function save($data)
	{
		$this->db->insert('careers', $data);
                return $this->db->insert_id();
	}
	
	
}