<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talent extends CI_Controller {

	public function index() {
		$data['meta'] = [
			'title' => 'Dashboard | Digitalent',
		];

		$this->load->view('layout/talent_dashboard', $data);
	}

    public function profile() {
		$data['meta'] = [
			'title' => 'Profile | Digitalent',
		];

		$this->load->view('layout/talent_profile', $data);
	}

    public function jobdesc() {
		$data['meta'] = [
			'title' => 'Job Description | Digitalent',
		];

		$this->load->view('layout/talent_jobdesc', $data);
	}

    public function session() {
		$data['meta'] = [
			'title' => 'Session | Digitalent',
		];

		$this->load->view('layout/session_dashboard', $data);
	}

    public function sessionprofile() {
		$data['meta'] = [
			'title' => 'Session Profile | Digitalent',
		];

		$this->load->view('layout/session_profile', $data);
	}

}