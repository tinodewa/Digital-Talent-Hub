<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talent extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('M_Talent');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session'));
		if ($this->session->userdata('ID_TALENT') == null) {
			redirect('');
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
			
			array_push(
				$data['dataProject'],
				array(
					'ID_PROJECT' => $ItemDB1->id_project,
					'NAMA_COMPANY' => $ItemDB1->nama_company,
					'NAMA_PROJECT' => $ItemDB1->nama_project,
					'DESC_PROJECT' => $ItemDB1->deskripsi_project,
					'PICT_PROJECT' => $ItemDB1->profile_pict_company,
					'SKILL_PROJECT' => $this->getProjSkill(explode(';', $dataPjkDB->id_skill)),
					'SALARY_PROJECT' => $ItemDB1->salary
				)
			);
		}
		$this->load->view('layout/talent_dashboard', $data);
	}

    public function profile() {
		$config = array(
			array('field' => 'projectName', 'label' => 'projectName', 'rules' => 'required'),
			array('field' => 'projectDesc', 'label' => 'projectDesc', 'rules' => 'required'),
			array('field' => 'projectSalary', 'label' => 'projectSalary', 'rules' => 'required'),
			array('field' => 'projectRegistration', 'label' => 'projectRegistration', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
		} else {
			$data['meta'] = [
				'title' => 'Profile | Digitalent',
			];

			$dataSkill = $this->M_Talent->getSkillTalent($this->session->userdata('ID_TALENT'));
	
			$data['ProfileTal'] = $this->M_Talent->getTalentProfile($this->session->userdata('ID_TALENT'));
			$data['SKILL_TALENT'] = $this->getTalSkill(explode(';', $dataSkill->id_skill));

			$this->load->view('layout/talent_profile', $data);
		}
	}

    public function jobdesc($id) {
		$data['meta'] = [
			'title' => 'Job Description | Digitalent',
		];

		$dataProjectDetail = $this->M_Talent->getProjectDetail($id);
		$dataPskDB = $this->M_Talent->getSkillCompany($dataProjectDetail->id_project);
		$dataSkillDB = array();
		
		$data['data_detail_project'] = array(
			'ID_PROJECT' => $dataProjectDetail->id_project,
			'NAMA_PROJECT' => $dataProjectDetail->nama_project,
			'DESC_PROJECT' => $dataProjectDetail->deskripsi_project,
			'SALARY_PROJECT' => $dataProjectDetail->salary,
			'REGIST_PROJECT' => $dataProjectDetail->registration_project,
			'SKILL_PROJECT' => $this->getProjSkill(explode(';', $dataPskDB->id_skill))
		);

		$data['skill'] = $this->M_Talent->getSkill();
		
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

	public function getProjSkill($dataProjSkill) {
		$dataSkillDB = array();
		foreach ($dataProjSkill as $item_skill) {
			$dataPskDB2 = $this->M_Talent->getSkillById($item_skill);
			foreach ($dataPskDB2 as $ItemDB2) {
				array_push(
					$dataSkillDB,
					array(
						'ID_SKILL' => $ItemDB2->id_skill,
						'NAMA_SKILL' => $ItemDB2->nama_skill
					)
				);
			}
		}

		return $dataSkillDB;
	}

	public function getTalSkill($dataTalSkill) {
		$dataSkillDB = array();
		foreach ($dataTalSkill as $item_skill) {
			$dataPskDB2 = $this->M_Talent->getSkillById($item_skill);
			foreach ($dataPskDB2 as $ItemDB2) {
				array_push(
					$dataSkillDB,
					array(
						'ID_SKILL' => $ItemDB2->id_skill,
						'NAMA_SKILL' => $ItemDB2->nama_skill
					)
				);
			}
		}

		return $dataSkillDB;
	}
}