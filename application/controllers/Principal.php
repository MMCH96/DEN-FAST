<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModeloPrincipal');
		
	}


	public function index()
	{

		$this->load->view('header');
		$this->load->view('principal');
		$this->load->view('footer');
	}

	public function denuncia()
	{

		$this->load->view('header');
		$this->load->view('formulario-den');
		$this->load->view('footer');
	}

	public function servicios()
	{

		$this->load->view('header');
		$this->load->view('servicios');
		$this->load->view('footer');
	}

	public function info()
	{

		$this->load->view('header');
		$this->load->view('info');
		$this->load->view('footer');
	}

	public function contacto()
	{

		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}

	public function preguntas()
	{

		$this->load->view('header');
		$this->load->view('preguntas');
		$this->load->view('footer');
	}

	public function asistel()
	{

		$this->load->view('header');
		$this->load->view('asistel');
		$this->load->view('footer');
	}

	public function GuardarD(){
		$nombre=$this->input->post('nombre');
		$sexo=$this->input->post('sexo');
		$estado_c=$this->input->post('estado_c');
		$municipio_c=$this->input->post('municipio_c');
		$colonia_c=$this->input->post('colonia_c');
		$cp_c=$this->input->post('cp_c');
		$calle_c=$this->input->post('calle_c');
		$num_c=$this->input->post('num_c');
		$telefono_c=$this->input->post('telefono_c');
		$correo_c=$this->input->post('correo_c');
		$edad=$this->input->post('edad');
		$hechos=$this->input->post('hechos');
		$hora_he=$this->input->post('hora_he');
		$fecha_he=$this->input->post('fecha_he');
		$estado_he=$this->input->post('estado_he');
		$municipio_he=$this->input->post('municipio_he');
		$colonia_he=$this->input->post('colonia_he');
		$localidad_he=$this->input->post('localidad_he');
		$calle_he=$this->input->post('calle_he');
		
		$this->ModeloPrincipal->InsertarD($nombre,$sexo,$estado_c,$municipio_c,$colonia_c,$cp_c,$calle_c,$num_c,$telefono_c,$correo_c,$edad,$hechos,$hora_he,$fecha_he,$estado_he,$municipio_he,$colonia_he,$localidad_he,$calle_he);
		redirect('Principal/index');
	}








}