<?php
class direccion_model extends CI_Model {
	private $tabla = 'direccion';


	public function get($id, $idName = null) {
		if ($idName)// Si obtenemos el nombre del campo
		{
			$this->db->where($idName, $id);
		} else {
			// Campo ID por defecto
			$this->db->where('id', $id);
		}

		$this->db->from($this->tabla);
		$q = $this->db->get();
		return current($q->result_array());
		#return $q->result_array();
	}

	public function getList($filtro='') {
		$this->db->from($this->tabla);
		if(!empty($filtro)){
			$this->db->like('calle',$filtro);
			$this->db->like('numero',$filtro);
		}
		$q = $this->db->get();
		return $q->result_array();
	}

	public function agregar($data = array()){
		$this->db->insert($this->tabla, $data);
	}

	public function actualizar($id, $data = array()){
		$this->db->where('id',$id);
		$this->db->update($this->tabla, $data);
	}

	public function borrar($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tabla);
	}
}
