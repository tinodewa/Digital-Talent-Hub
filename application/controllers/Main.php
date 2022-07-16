<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{

		parent::__construct();
		$this->load->model('M_Main');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$data['meta'] = [
			'title' => 'Digitalent',
		];

		$this->load->view('layout/main', $data);
	}

	public function login_company()
	{
		$dataLogin = array(
			'username_company' => $_POST["username"],
			'password' => $this->encryptIt($_POST["password"])
		);
		$checking = $this->M_Main->check_login('company', $dataLogin);
		if ($checking) {
			$this->session->set_userdata(
				array(
					'ID_COMPANY' => $checking->id_company,
					'USERNAME_COMPANY' => $checking->username_company,
					'NAMA_COMPANY' => $checking->nama_company,
					'PICT_COMPANY' => $checking->profile_pict_company
				)
			);
			redirect('company');
		} else {
			$this->session->set_flashdata(
				'msg_error_login',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px;">
					<h5>Sorry Your Email and Password Not Match.</h5>
				</div>'
			);
			redirect('');
		}
	}

	public function login_talent()
	{
		$dataLogin2 = array(
			'username' => $_POST["username"],
			'password' => $this->encryptIt($_POST["password"])
		);
		$checking2 = $this->M_Main->check_login('talent', $dataLogin2);
		if ($checking2) {
			$this->session->set_userdata(
				array(
					'ID_TALENT' => $checking2->id_talent,
					'USERNAME_TALENT' => $checking2->username,
					'NAMA_TALENT' => $checking2->nama_talent,
					'PICT_TALENT' => $checking2->profile_pict_talent
				)
			);
			redirect('talent');
		} else {
			$this->session->set_flashdata(
				'msg_error_login',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Your Password or Username Wrong!</strong> You should sign in again.
				<a style="cursor: pointer;" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</a>
			</div>'
			);
			redirect('login');
		}
	}

	public function login()
	{
		$data['meta'] = [
			'title' => 'Login | Digitalent',
		];
		$this->load->view('layout/login', $data);
	}

	public function signuptalent()
	{
		$config = array(
			array('field' => 'nama_talent', 'label' => 'nama_talent', 'rules' => 'required'),
			array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
			array('field' => 'username', 'label' => 'username', 'rules' => 'required'),
			array('field' => 'password', 'label' => 'password', 'rules' => 'required')
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$password = $this->encryptIt($_POST['password']);
			$id_com = $this->generateRandomString($_POST['nama_talent']);

			$dataRegistTalent = array(
				'id_talent' => 'Talent_' . $id_com,
				'nama_talent' => $_POST['nama_talent'],
				'email_talent' => $_POST["email"],
				'username' => $_POST["username"],
				'password' => $password
			);
			$this->M_Main->RegistTalent($dataRegistTalent);
		} else {
			$data['meta'] = [
				'title' => 'Sign Up | Digitalent',
			];

			$this->load->view('layout/signup_talent', $data);
		}
	}

	public function signupcompany()
	{
		$config = array(
			array('field' => 'nama_company', 'label' => 'nama_company', 'rules' => 'required'),
			array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
			array('field' => 'username', 'label' => 'username', 'rules' => 'required'),
			array('field' => 'password', 'label' => 'password', 'rules' => 'required')
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$password = $this->encryptIt($_POST['password']);
			$id_com = $this->generateRandomString($_POST['nama_company']);

			$dataRegistCompany = array(
				'id_company' => 'Comp_' . $id_com,
				'nama_company' => $_POST['nama_company'],
				'email_company' => $_POST["email"],
				'username_company' => $_POST["username"],
				'password' => $password
			);
			$this->M_Main->RegistCompany($dataRegistCompany);
		} else {
			$data['meta'] = [
				'title' => 'Sign Up | Digitalent',
			];

			$this->load->view('layout/signup_company', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}

	public function encryptIt($q)
	{
		$qEncoded = base64_encode(md5($q));
		return ($qEncoded);
	}

	public function generateRandomString($string)
	{
		$qEncoded = base64_encode($string);
		return ($qEncoded);
	}
}
