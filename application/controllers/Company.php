<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index() {
		$data['meta'] = [
			'title' => 'Dashboard | Digitalent',
		];

		$dataCompanyDB = $this->M_Company->getCompany();
		$data['dataCompany'] = array();

		foreach($dataCompanyDB as $ItemDB1){
			$dataPskDB = $this->M_Company->getTalentCompany($ItemDB1->id_project);
			$dataSkillDB = array();
			foreach($dataPskDB as $ItemDB2){
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
					'SKILL_PROJECT' => $dataSkillDB
				)
			);
		}

		$this->load->view('layout/company_dashboard', $data);
	}

    public function profile() {
		$data['meta'] = [
			'title' => 'Profile | Digitalent',
		];

		$this->load->view('layout/company_profile', $data);
	}

    public function project() {
		$data['meta'] = [
			'title' => 'Project | Digitalent',
		];

		$this->load->view('layout/company_project', $data);
	}

    public function postproject() {
		$data['meta'] = [
			'title' => 'Post Project | Digitalent',
		];

		$this->load->view('layout/company_post_project', $data);
	}

    public function listapplicant() {
		$data['meta'] = [
			'title' => 'List Applicant | Digitalent',
		];

		$this->load->view('layout/company_list_applicant', $data);
	}

    public function applicantprofile() {
		$data['meta'] = [
			'title' => 'Applicant Profile | Digitalent',
		];

		$this->load->view('layout/company_applicant_profile', $data);
	}
}