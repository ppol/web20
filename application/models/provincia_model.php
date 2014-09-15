<?php
class provincia_model extends CI_Model {
	function listado(){
		$this->db->from('provincia');
		$q = $this->db->get();
		return $q->result_array();
	}
}