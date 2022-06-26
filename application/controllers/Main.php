<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$data['meta'] = [
			'title' => 'Digitalent',
		];

		$this->load->view('layout/main', $data);
	}

	public function login() {
		$data['meta'] = [
			'title' => 'Login | Digitalent',
		];

		$this->load->view('layout/login', $data);
	}

	public function signuptalent() {
		$data['meta'] = [
			'title' => 'Sign Up | Digitalent',
		];

		$this->load->view('layout/signup_talent', $data);
	}

	public function signupcompany() {
		$data['meta'] = [
			'title' => 'Sign Up | Digitalent',
		];

		$this->load->view('layout/signup_company', $data);
	}
}
