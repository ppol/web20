<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Provincia extends CI_controller{

public function index()
	{
		$this->load->model('provincia_model');
		$data = array();
		$data['provincias'] = $this->provincia_model->getList();
		$data['titulo'] = 'Listado de provincias';
		//print_r($data);
		$this->load->view('provincias', $data);
	}
}