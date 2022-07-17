<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_Company');
		$this->load->helper(array('string', 'text', 'url'));
		$this->load->library(array('form_validation', 'session', 'image_lib'));
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

			array_push(
				$data['dataCompany'],
				array(
					'NAMA_COMPANY' => $ItemDB1->nama_company,
					'ID_PROJECT' => $ItemDB1->id_project,
					'NAMA_PROJECT' => $ItemDB1->nama_project,
					'DESC_PROJECT' => $ItemDB1->deskripsi_project,
					'PICT_PROJECT' => $ItemDB1->profile_pict_company,
					'SALARY_PROJECT' => $ItemDB1->salary,
					'SKILL_PROJECT' => $this->getProjSkill(explode(';', $dataPskDB->id_skill))
				)
			);
		}

		$this->load->view('layout/company_dashboard', $data);
	}

	public function profile()
	{
		$data['DetailComp'] = $this->M_Company->getCompanyDetail($this->session->userdata('ID_COMPANY'));
		$id_company = $this->session->userdata('ID_COMPANY');
		$config = array(
			array('field' => 'companyName', 'label' => 'companyName', 'rules' => 'required'),
			array('field' => 'companyAbout', 'label' => 'companyAbout', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$dataNewCompany = array(
				'nama_company' => $_POST['companyName'],
				'medsos' => $_POST['companyWhatsapp'],
				'email_company' => $_POST['companyGmail'],
				'website' => $_POST['companyWebsite'],
				'summary_company' => $_POST['companyAbout']
			);

			$config_upload = array(
				'upload_path' => './assets/company_image/',
				'allowed_types' => 'jpg|jpeg|png',
				'file_name' => "Image_Company_" . $_POST['companyName'] . time()
			);

			$this->load->library('upload', $config_upload);
			if ($this->upload->do_upload('ImgUpload')) {
				$upload_data = $this->upload->data();
				if (!empty($data['DetailComp']->profile_pict_company)) {
					unlink('../' . $data['DetailComp']->profile_pict_company);
				}
				$file_name = base_url() . 'assets/company_image/' . $upload_data['file_name'];

				$configer =  array(
					'image_library'   => 'gd2',
					'source_image'    =>  $file_name,
					'maintain_ratio'  =>  TRUE,
					'width'           =>  500
				);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$dataNewCompany['profile_pict_company'] = $file_name;

				$this->session->set_userdata(array('PICT_COMPANY' => $file_name));
			}

			$this->M_Company->UpdateCompany($id_company, $dataNewCompany);
			redirect('company-profile/');
		} else {
			$data['meta'] = [
				'title' => 'Profile | Digitalent',
			];

			$this->load->view('layout/company_profile', $data);
		}
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
			$dataNewProject = array(
				'nama_project' => $_POST['projectName'],
				'deskripsi_project' => $_POST['projectDesc'],
				'salary' => $_POST['projectSalary'],
				'id_company' => $this->session->userdata('ID_COMPANY')
			);

			if ($this->M_Company->UpdateProject($id, $dataNewProject)) {
				$DataSkill = $_POST['projectName'];
				if (!empty($DataSkill)) {
					$PjksData = $this->M_Company->GetProjectSkill($id);
					if (!empty($PjksData)) {
						$this->M_Company->DeleteProjectSkill($id);
					}

					$id_pjks = $this->generateRandomString($DataSkill[0]);
					$this->InsertProjectSkill($id_pjks, $id, $_POST['skill']);
				}

				redirect('company-project/' . $id);
			}
		} else {
			$data['meta'] = [
				'title' => 'Project | Digitalent',
			];

			$dataProjectDetail = $this->M_Company->getProjectDetail($id);
			$dataPskDB = $this->M_Company->getSkillCompany($dataProjectDetail->id_project);

			$data['data_detail_project'] = array(
				'ID_PROJECT' => $dataProjectDetail->id_project,
				'NAMA_PROJECT' => $dataProjectDetail->nama_project,
				'DESC_PROJECT' => $dataProjectDetail->deskripsi_project,
				'SALARY_PROJECT' => $dataProjectDetail->salary,
				'REGIST_PROJECT' => $dataProjectDetail->registration_project,
				'SKILL_PROJECT' => $this->getProjSkill(explode(';', $dataPskDB->id_skill))
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
			$id_projc = $this->generateRandomString($_POST['projectName']);

			$dataNewProject = array(
				'id_project' => 'Proj_' . $id_projc,
				'nama_project' => $_POST['projectName'],
				'deskripsi_project' => $_POST['projectDesc'],
				'salary' => $_POST['projectSalery'],
				'id_company' => $this->session->userdata('ID_COMPANY')
			);
			if ($this->M_Company->InsertProject($dataNewProject)) {
				$DataSkill = $_POST['projectName'];
				if (!empty($DataSkill)) {
					$id_pjks = $this->generateRandomString($DataSkill[0]);
					$this->InsertProjectSkill($id_pjks, 'Proj_' . $id_projc, $_POST['skill']);
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

	public function getProjSkill($dataProjSkill)
	{
		$dataSkillDB = array();
		foreach ($dataProjSkill as $item_skill) {
			$dataPskDB2 = $this->M_Company->getSkillById($item_skill);
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

	public function InsertProjectSkill($id_pjks, $id, $SkillData)
	{
		$DataSkill = implode(';', $SkillData);
		$dataNewProjectSkill = array(
			'id_project_skill' => 'Pjks_' . $id_pjks,
			'id_project' => $id,
			'id_skill' => $DataSkill
		);
		$this->M_Company->InsertProjectSkill($dataNewProjectSkill);
	}

	public function generateRandomString($string)
	{
		$bytes = random_bytes(10);
		return (bin2hex($string . $bytes));
	}

	public function ApiUploadImageCompany()
	{
		var_dump($_FILES['file']);
		exit;
		return json_encode($_FILES['file']['name']);
	}
}
