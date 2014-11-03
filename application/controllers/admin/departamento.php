<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Departamento extends MY_Controller {
	public $modelo = "departamento_model";

	public function index() {
		$filtro				= $this->input->post('filtro');
		$data               = array();
		$data['departamentos'] = $this->departamento_model->getList($filtro);
		$data['titulo']     = "Listado de departamentos";
		$data['filtro']		= $filtro;
		$this->load->view('admin/departamento/index', $data);
	}

	public function agregar() {
		$departamento = $this->input->post('departamento');
		
		$data = ['accion' => 'Agregar'];
		if($departamento){
			$reg = ['nombre' => $departamento];
			$this->departamento_model->agregar($reg);
			redirect('admin/departamento/index');
			exit;
		} else {
			$this->load->model('provincia_model');
			$data['provincias'] = $this->provincia_model->getList();
			$this->load->view('admin/departamento/formulario',$data);
		}
	}

	public function editar($id=null) {
		$departamento = $this->input->post('departamento');
		$data = ['accion' => 'Editar', 'id' => $id];
		if($id){
			$data['reg'] = $this->departamento_model->get($id);
		}
		if(empty($data['reg'])){
			redirect('admin/departamento/index');
		}
		if($departamento and $id){
			$reg = ['nombre' => $departamento];
			$this->departamento_model->actualizar($id, $reg);
			redirect('admin/departamento/index');
			exit;
		} else {
			$this->load->view('admin/departamento/formulario',$data);
		}
	}

	public function eliminar($id=null) {
		if($id){
			$data['reg'] = $this->departamento_model->get($id);
		}
		if(empty($data['reg'])){
			echo 0;
		} else {
			$this->departamento_model->borrar($id);
			echo 1;
		}
	}
}
