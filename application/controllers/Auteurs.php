<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auteurs extends CI_Controller {

	public function index()
	{
		$this->load->view('poemes/auteurs');
	}
	
	// si paramètre -> auteur -> poèmes de l'auteur
}