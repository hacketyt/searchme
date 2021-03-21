<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('website/home');
	}

	public function signup(){
		$this->load->view('website/sign');

	}

	public function form_addon(){
		$this->load->view('website/signup_addon');
	}

	public function resetpass(){
		$this->load->view('website/forgetPass');
	}

	public function loggedIn(){
		echo "Acoount Created";
	}


}
