<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Provincia extends MY_Controller {
	public $modelo = "provincia_model";

	public function index() {
		$data               = array();
		$data['provincias'] = $this->provincia_model->getList();
		$data['titulo']     = "Listado de provincias";
		$this->load->view('admin/provincia/index', $data);
	}

	public function agregar() {
		$provincia = $this->input->post('provincia');
		$data = ['accion' => 'Agregar'];
		if($provincia){
			$reg = ['nombre' => $provincia];
			$this->provincia_model->agregar($reg);
			redirect('admin/provincia/index');
			exit;
		} else {
			$this->load->view('admin/provincia/formulario',$data);
		}
	}

	public function editar($id=null) {
		$provincia = $this->input->post('provincia');
		$data = ['accion' => 'Editar', 'id' => $id];
		if($id){
			$data['reg'] = $this->provincia_model->get($id);
		}
		if(empty($data['reg'])){
			redirect('admin/provincia/index');
		}
		if($provincia and $id){
			$reg = ['nombre' => $provincia];
			$this->provincia_model->actualizar($id, $reg);
			redirect('admin/provincia/index');
			exit;
		} else {
			$this->load->view('admin/provincia/formulario',$data);
		}
	}
}
