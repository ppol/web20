<?php
class provincia_model extends CI_Model {

	public function get($id, $idName = null){
		
		if($idName) // si obtenemos el nombre del campo
				$this->db->where($idName, $id);
		else // campo ID por defecto
				$this->db->where('id', $id);
		$this->db->from('provincia');
		$q = $this->db->get();
		return current($q->result_array());
	}

	public function getList(){
		$this->db->from('provincia');
		$q = $this->db->get();
		return $q->result_array();
	}

}