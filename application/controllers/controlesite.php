<?php


class Controlesite extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		$this->load->helper('html');
	}
	
	public function index(){
		
		$data['pagina'] = "conteudo";
		$data['title'] = "Pousada Paraíso do Pontal";
		
		$this->load->view('page',$data);
	}
}