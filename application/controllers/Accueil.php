<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->load->view('accueil/accueil');
	}
	
	public function register()
	{
		$this->load->view('accueil/register');
	}
	
	public function login()
	{
		$this->load->view('accueil/login');
	}
	
	public function logout()
	{
		
	}
	
	public function compte()
	{
		$this->load->view('accueil/compte');
	}
	
	public function auteurs()
	{
		$this->load->view('accueil/auteurs');
	}
	
	public function auteur()
	{
		$this->load->view('accueil/auteur');
	}
}
