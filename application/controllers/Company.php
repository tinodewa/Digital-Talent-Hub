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
				$data['dataCompany'],
				array(
					'NAMA_COMPANY' => $ItemDB1->nama_company,
					'NAMA_PROJECT' => $ItemDB1->nama_project,
					'DESC_PROJECT' => $ItemDB1->deskripsi_project,
					'PICT_PROJECT' => $ItemDB1->profile_pict_company,
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

	public function project()
	{
		$data['meta'] = [
			'title' => 'Project | Digitalent',
		];

		$this->load->view('layout/company_project', $data);
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
				'id_project' => 'Proj_'.$id_projc,
				'nama_project' => $_POST['projectName'],
				'deskripsi_project' => $_POST['projectDesc'],
				'id_company' => $this->session->userdata('ID_COMPANY')
			);
			if ($this->M_Company->InsertProject($dataNewCompany)) {
				foreach($SkillData as $ItemSkill){
					$id_pjks = $this->generateRandomString($ItemSkill.$_POST['projectName']);
					$dataNewCompanySkill = array(
						'id_project_skill' => 'Pjks_'.$id_pjks,
						'id_project' => 'Proj_'.$id_projc,
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

	public function generateRandomString($string) {
		$qEncoded = base64_encode($string);
        return ($qEncoded);
	}
}
