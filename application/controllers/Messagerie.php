<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messagerie extends CI_Controller {

	public function index()
	{
		$this->load->view('messagerie/conversations');
	}
	
	public function lire()
	{
		$this->load->view('messagerie/lire');
	}
	
	public function ecrire()
	{
		$this->load->view('messagerie/ecrire');
	}
	
	public function supprimer()
	{
		
	}
}