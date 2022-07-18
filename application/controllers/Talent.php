<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talent extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('M_Talent');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session', 'image_lib'));
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
		$data['meta'] = [
			'title' => 'Profile | Digitalent',
		];
		$id_talent = $this->session->userdata('ID_TALENT');

		$dataSkill = $this->M_Talent->getSkillTalent($id_talent);

		$data['ProfileTal'] = $this->M_Talent->getTalentProfile($id_talent);
		$data['SKILL_TALENT'] = $this->getTalSkill(explode(';', $dataSkill->id_skill));
		$data['skill'] = $this->M_Talent->getSkill();
		
		$config = array(
			array('field' => 'talentName', 'label' => 'talentName', 'rules' => 'required'),
			array('field' => 'talentBio', 'label' => 'talentBio', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$dataNewTalent = array(
				'nama_talent' => $_POST['talentName'],
				'email_talent' => $_POST['talentGmail'],
				'website_talent' => $_POST['talentWebsite'],
				'no_talent' => $_POST['talentWhatsapp'],
				'summary_talent' => $_POST['talentBio']
			);

			$config_upload = array(
				'upload_path' => './assets/talent_image/',
				'allowed_types' => 'jpg|jpeg|png',
				'file_name' => "Image_Talent_" . $_POST['talentName'] . time()
			);

			$this->load->library('upload', $config_upload);
			if ($this->upload->do_upload('ImgUpload')) {
				$upload_data = $this->upload->data();
				if (!empty($data['ProfileTal']->profile_pict_talent)) {
					unlink($data['ProfileTal']->profile_pict_talent);
				}
				$file_name = 'assets/talent_image/' . $upload_data['file_name'];

				$configer =  array(
					'image_library'   => 'gd2',
					'source_image'    =>  $file_name,
					'maintain_ratio'  =>  TRUE,
					'width'           =>  500
				);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$dataNewTalent['profile_pict_talent'] = $file_name;

				$this->session->set_userdata(array('PICT_TALENT' => $file_name));
			}
			
			if ($this->M_Talent->UpdateTalent($id_talent, $dataNewTalent)) {
				$DataSkill = $_POST['talentName'];
				if (!empty($DataSkill)) {
					$TalsData = $this->M_Talent->GetTalentSkill($id_talent);
					if (!empty($TalsData)) {
						$this->M_Talent->DeleteTalentSkill($id_talent);
					}

					$id_tals = $this->generateRandomString($DataSkill[0]);
					$this->InsertTalentSkill($id_tals, $id_talent, $_POST['skill']);
				}

				redirect('talent/profile');
			}
			
		} else {
			$data['meta'] = [
				'title' => 'Profile | Digitalent',
			];

			$this->load->view('layout/talent_profile', $data);
		}
		
	}

    public function jobdesc($id) {
		$data['meta'] = [
			'title' => 'Job Description | Digitalent',
		];
		

		$dataProjectDetail = $this->M_Talent->getProjectDetail($id, $this->session->userdata('ID_TALENT'));
		$dataPskDB = $this->M_Talent->getSkillCompany($dataProjectDetail->id_project);
		$dataSkillDB = array();
		
		if(empty($dataProjectDetail)){	
			
		}
		$data['data_detail_project'] = array(
			'ID_PROJECT' => $dataProjectDetail->id_project,
			'NAMA_PROJECT' => $dataProjectDetail->nama_project,
			'DESC_PROJECT' => $dataProjectDetail->deskripsi_project,
			'SALARY_PROJECT' => $dataProjectDetail->salary,
			'REGIST_PROJECT' => $dataProjectDetail->registration_project,
			'SKILL_PROJECT' => $this->getProjSkill(explode(';', $dataPskDB->id_skill)),
			'STATUS' => $dataProjectDetail->status
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

	public function ApiUploadImageTalent()
	{
		var_dump($_FILES['file']);
		exit;
		return json_encode($_FILES['file']['name']);
	}

	public function InsertTalentSkill($id_tals, $id, $SkillData)
	{
		$DataSkill = implode(';', $SkillData);
		$dataNewTalentSkill = array(
			'id_talent_skill' => 'TalS_' . $id_tals,
			'id_talent' => $id,
			'id_skill' => $DataSkill
		);
		$this->M_Talent->InsertTalentSkill($dataNewTalentSkill);
	}

	public function generateRandomString($string)
	{
		$bytes = random_bytes(10);
		return (bin2hex($string . $bytes));
	}

	public function ApplyProject($id_project)
	{
		$id_talent = $this->session->userdata('ID_TALENT');

		$data = array(
			'id_project' => $id_project,
			'id_talent' => $id_talent,
			'status' => 0
		);
		$this->M_Talent->InsertApply($data);		
		redirect('talent/jobdesc/'.$id_project);
	}
}