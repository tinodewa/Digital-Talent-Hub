<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talent extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('M_Talent');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session'));
		if ($this->session->userdata('ID_TALENT') == null) {
			redirect('login');
		}

	}

	public function index() {
		$data['meta'] = [
			'title' => 'Dashboard | Digitalent',
		];
		$dataProject = $this->M_Talent->getProject();
		$data['dataProject'] = array();

		foreach ($dataProject as $ItemDB1) {
			$dataPjkDB = $this->M_Talent->getSkillCompany($ItemDB1->id_project);
			$dataSkillDB = array();
			foreach ($dataPjkDB as $ItemDB2) {
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
					'ID_PROJECT' => $ItemDB1->id_project,
					'NAMA_COMPANY' => $ItemDB1->nama_company,
					'NAMA_PROJECT' => $ItemDB1->nama_project,
					'DESC_PROJECT' => $ItemDB1->deskripsi_project,
					'PICT_PROJECT' => $ItemDB1->profile_pict_company,
					'SKILL_PROJECT' => $dataSkillDB,
					'SALARY_PROJECT' => $ItemDB1->salary
				)
			);
		}
		$this->load->view('layout/talent_dashboard', $data);
	}

    public function profile() {
		$data['meta'] = [
			'title' => 'Profile | Digitalent',
		];

		$this->load->view('layout/talent_profile', $data);
	}

    public function jobdesc($id) {
		$data['meta'] = [
			'title' => 'Job Description | Digitalent',
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