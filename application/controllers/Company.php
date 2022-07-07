<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_Company');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session'));
		if ($this->session->userdata('ID_COMPANY') == null) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['meta'] = [
			'title' => 'Dashboard | Digitalent',
		];
		$dataCompanyDB = $this->M_Company->getCompany();
		$data['dataCompany'] = array();

		foreach ($dataCompanyDB as $ItemDB1) {
			$dataPskDB = $this->M_Company->getSkillCompany($ItemDB1->id_project);
			$dataSkillDB = array();
			foreach ($dataPskDB as $ItemDB2) {
				array_push(
					$dataSkillDB,
					array(
						'NAMA_SKILL' => $ItemDB2->nama_skill
					)
				);
			}
			array_push(
				$data['dataProject'],
				array(
					'NAMA_COMPANY' => $ItemDB1->nama_company,
					'ID_PROJECT' => $ItemDB1->id_project,
					'NAMA_PROJECT' => $ItemDB1->nama_project,
					'DESC_PROJECT' => $ItemDB1->deskripsi_project,
					'PICT_PROJECT' => $ItemDB1->profile_pict_company,
					'SALARY_PROJECT' => $ItemDB1->salary,
					'SKILL_PROJECT' => $dataSkillDB
				)
			);
		}
		$this->load->view('layout/company_dashboard', $data);
	}

	public function profile()
	{
		$data['meta'] = [
			'title' => 'Profile | Digitalent',
		];

		$this->load->view('layout/company_profile', $data);
	}

	public function project($id)
	{
		$config = array(
			array('field' => 'projectName', 'label' => 'projectName', 'rules' => 'required'),
			array('field' => 'projectDesc', 'label' => 'projectDesc', 'rules' => 'required'),
			array('field' => 'projectSalary', 'label' => 'projectSalary', 'rules' => 'required'),
			array('field' => 'projectRegistration', 'label' => 'projectRegistration', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$SkillData = $_POST['skill'];
			$dataNewCompany = array(
				'nama_project' => $_POST['projectName'],
				'deskripsi_project' => $_POST['projectDesc'],
				'salary' => $_POST['projectSalery'],
				'id_company' => $this->session->userdata('ID_COMPANY')
			);
			if ($this->M_Company->UpdateProject($id, $dataNewCompany)) {
				foreach ($SkillData as $ItemSkill) {
					$id_pjks = $this->generateRandomString($ItemSkill . $_POST['projectName']);
					$dataNewCompanySkill = array(
						'id_skill' => $ItemSkill
					);
					$this->M_Company->UpdateProjectSkill($dataNewCompanySkill);
				}
			}
		} else {
			$data['meta'] = [
				'title' => 'Project | Digitalent',
			];

			$dataProjectDetail = $this->M_Company->getCompanyDetail($id);
			$dataPskDB = $this->M_Company->getSkillCompany($dataProjectDetail->id_project);
			$dataSkillDB = array();
			foreach ($dataPskDB as $ItemDB2) {
				array_push(
					$dataSkillDB,
					array(
						'ID_SKILL' => $ItemDB2->id_skill,
						'NAMA_SKILL' => $ItemDB2->nama_skill
					)
				);
			}
			
			$data['data_detail_project'] = array(
				'ID_PROJECT' => $dataProjectDetail->id_project,
				'NAMA_PROJECT' => $dataProjectDetail->nama_project,
				'DESC_PROJECT' => $dataProjectDetail->deskripsi_project,
				'SALARY_PROJECT' => $dataProjectDetail->salary,
				'REGIST_PROJECT' => $dataProjectDetail->registration_project,
				'SKILL_PROJECT' => $dataSkillDB
			);

			$data['skill'] = $this->M_Company->getSkill();

			$this->load->view('layout/company_project', $data);
		}
	}

	public function postproject()
	{
		$config = array(
			array('field' => 'projectName', 'label' => 'projectName', 'rules' => 'required'),
			array('field' => 'projectDesc', 'label' => 'projectDesc', 'rules' => 'required'),
			array('field' => 'projectSalery', 'label' => 'projectSalery', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$SkillData = $_POST['skill'];
			$id_projc = $this->generateRandomString($_POST['projectName']);

			$dataNewCompany = array(
				'id_project' => 'Proj_' . $id_projc,
				'nama_project' => $_POST['projectName'],
				'deskripsi_project' => $_POST['projectDesc'],
				'salary' => $_POST['projectSalery'],
				'id_company' => $this->session->userdata('ID_COMPANY')
			);
			if ($this->M_Company->InsertProject($dataNewCompany)) {
				foreach ($SkillData as $ItemSkill) {
					$id_pjks = $this->generateRandomString($ItemSkill . $_POST['projectName']);
					$dataNewCompanySkill = array(
						'id_project_skill' => 'Pjks_' . $id_pjks,
						'id_project' => 'Proj_' . $id_projc,
						'id_skill' => $ItemSkill
					);
					$this->M_Company->InsertProjectSkill($dataNewCompanySkill);
				}
			}
			redirect('company');
		} else {
			$data['meta'] = [
				'title' => 'Post Project | Digitalent',
			];
			$data['skill'] = $this->M_Company->getSkill();

			$this->load->view('layout/company_post_project', $data);
		}
	}

	public function listapplicant()
	{
		$data['meta'] = [
			'title' => 'List Applicant | Digitalent',
		];

		$this->load->view('layout/company_list_applicant', $data);
	}

	public function applicantprofile()
	{
		$data['meta'] = [
			'title' => 'Applicant Profile | Digitalent',
		];

		$this->load->view('layout/company_applicant_profile', $data);
	}

	public function limit_text($text, $limit)
	{
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos   = array_keys($words);
			$text  = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;
	}

	public function generateRandomString($string)
	{
		$bytes = random_bytes(10);
		return (bin2hex($string.$bytes));
	}

	public function ApiUploadImageCompany()
	{
		var_dump($_FILES['file']);exit;
		return json_encode($_FILES['file']['name']);
	}
}
