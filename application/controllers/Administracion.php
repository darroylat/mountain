<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administracion extends CI_Controller{


	public function index()
	{
		//$data['contenido'] = 'ruta a la vista dinamica';
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
		$data['contenido'] = 'mountain/contenido/contenido_dashboard';
    $data['title'] = 'Mountain';
    //$data['title'] = $title['title'] = 'Mountain';

		//$this->load->view('header');
    $this->load->helper('url');
		$this->load->view('template_mountain',$data);
		//$this->load->view('footer');
	}
  public function empy_page()
	{
		//$data['contenido'] = 'ruta a la vista dinamica';
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
		$data['contenido'] = 'mountain/contenido/contenido_empy';
    $data['title'] = 'Mountain';
    //$data['title'] = $title['title'] = 'Mountain';

		//$this->load->view('header');
    $this->load->helper('url');
		$this->load->view('template_mountain',$data);
		//$this->load->view('footer');
	}

  public function chart()
	{
		//$data['contenido'] = 'ruta a la vista dinamica';
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
		$data['contenido'] = 'mountain/contenido/contenido_chart';
    $data['title'] = 'Mountain';
    //$data['title'] = $title['title'] = 'Mountain';

		//$this->load->view('header');
    $this->load->helper('url');
		$this->load->view('template_mountain',$data);
		//$this->load->view('footer');
	}
	public function lugar($parametro){

		if ($parametro == 'nuevo') {
			$data['contenido'] = 'mountain/contenido/lugar_nuevo';
		}elseif ($parametro == 'ver') {
			$data['contenido'] = 'mountain/contenido/lugar_ver';
		}else {
			//TODO proximo 404 para la pagina de administracion
		}
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
    $data['title'] = 'Mountain';

		$this->load->helper('url');
		$this->load->view('template_mountain',$data);
	}
	public function evento($parametro){
		if ($parametro == 'nuevo') {
			$data['contenido'] = 'mountain/contenido/evento_nuevo';
		}elseif($parametro == 'ver'){
			$data['contenido'] = 'mountain/contenido/evento_ver';
		}else{
			//TODO proximo 404 para la pagina de administracion
			//$data['contenido'] = 'mountain/contenido/evento_ver';
		}
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
    $data['title'] = 'Mountain';

		$this->load->helper('url');
		$this->load->view('template_mountain',$data);
	}
	public function sendero($parametro){
		if ($parametro == 'nuevo') {
			$data['contenido'] = 'mountain/contenido/sendero_nuevo';
		}else{
			# code...
		}
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
    $data['title'] = 'Mountain';

		$this->load->helper('url');
		$this->load->view('template_mountain',$data);
	}
	public function equipamiento($parametro){
		if ($parametro == 'nuevo') {
			$data['contenido'] = 'mountain/contenido/equipamiento_nuevo';
		}else{
			# code...
		}
		$data['encabezado'] = 'mountain/encabezado';
		$data['menu'] = 'mountain/menu';
    $data['title'] = 'Mountain';

		$this->load->helper('url');
		$this->load->view('template_mountain',$data);
	}
}
