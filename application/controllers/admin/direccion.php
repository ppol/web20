<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Direccion extends MY_Controller {
	public $modelo = "direccion_model";

	public function index() {
		$filtro				= $this->input->post('filtro');
		$data               = array();
		$data['direcciones'] = $this->direccion_model->getList($filtro);
		$data['titulo']     = "Listado de direcciones";
		$data['filtro']		= $filtro;
		$this->load->view('admin/direccion/index', $data);
	}

	public function agregar() {
		$direccion = $this->input->post('direccion');
		$data = ['accion' => 'Agregar'];
		if($direccion){
			$reg = [
				'calle' => $direccion
				/*
				'numero' => $direccion,
				'piso' => $direccion,
				'depto' => $direccion,
				'localidad' => $direccion,
				'persona_id' => $direccion,
				'departamento_id' => $direccion
				*/
			];
			$this->direccion_model->agregar($reg);
			redirect('admin/direccion/index');
			exit;
		} else {
			$this->load->view('admin/direccion/formulario',$data);
		}
	}

	public function editar($id=null) {
		$direccion = $this->input->post('direccion');
		$data = ['accion' => 'Editar', 'id' => $id];
		if($id){
			$data['reg'] = $this->direccion_model->get($id);
		}
		if(empty($data['reg'])){
			redirect('admin/direccion/index');
		}
		if($direccion and $id){
			$reg = ['calle' => $direccion];
			$reg = ['numero' => $direccion];
			$reg = ['piso' => $direccion];
			$reg = ['depto' => $direccion];
			$reg = ['localidad' => $direccion];
			$reg = ['persona_id' => $direccion];
			$reg = ['departamento_id' => $direccion];
			$this->direccion_model->actualizar($id, $reg);
			redirect('admin/direccion/index');
			exit;
		} else {
			$this->load->view('admin/direccion/formulario',$data);
		}
	}

	public function eliminar($id=null) {
		if($id){
			$data['reg'] = $this->direccion_model->get($id);
		}
		if(empty($data['reg'])){
			echo 0;
		} else {
			$this->direccion_model->borrar($id);
			echo 1;
		}
	}
}
