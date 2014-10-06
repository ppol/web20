<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Direccion extends CI_Controller {
public $modelo = "sireccion_model";
public function index()
	{
		$this->load->model($this->modelo);
		$data = array();
		$data['direcciones'] = $this->direccion_model->getList();
		$data['titulo'] = 'Listado de direcciones';
		//print_r($data);
		$this->load->view('direcciones', $data);
	}
}