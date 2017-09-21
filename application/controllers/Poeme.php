<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poeme extends CI_Controller {

	public function lire()
	{
		$this->load->view('poeme/lire');
	}
	
	public function ajouter()
	{
		$this->load->view('poeme/ajouter');
	}
	
	public function modifier()
	{
		$this->load->view('poeme/modifier');
	}
	
	public function supprimer()
	{
		
	}
}