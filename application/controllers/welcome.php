<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
	#	echo "Hola mundo!";
		$this->load->view('welcome_message');
	}

	public function provincias()
	{
		$this->load->model('provincia_model');
		$data = array();
		$data['provincias'] = $this->provincia_model->getList();
		$data['titulo'] = 'Listado de provincias';
		//print_r($data);
		$this->load->view('provincias', $data);
	}

	public function provincia($id=null)
	{
			$this->load->model('provincia_model');
			if($id){
				$p = $this->provincia_model->get( $id ); 
				print_r($p);
			} else {
				echo "Debe especificar un número entero";
			}
	}

	public function provincia_nombre($nombre = null)
	{
			$this->load->model('provincia_model');
			if($nombre){
				$p = $this->provincia_model->get( $nombre, 'nombre' ); 
				print_r($p);
			} else {
				echo "Debe especificar un número entero";
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */