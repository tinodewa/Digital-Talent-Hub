<?php
class M_Company extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0');
    }

    public function getCompany()
    {
        $this->db->select('company.*, project.id_project, project.nama_project, project.deskripsi_project, project.salary');
        $this->db->join('company', 'company.id_company = project.id_company', 'LEFT OUTER');
        $this->db->where('company.id_company', $this->session->userdata('ID_COMPANY'));
        return $this->db->get("project")->result();
    }
    
    public function getCompanyDetail($id)
    {
        $this->db->select('company.*');
        $this->db->where('company.id_company', $id);
        return $this->db->get("company")->row();
    }
    
    public function UpdateCompany($id, $data)
    {
        $this->db->where('company.id_company', $id);
        return $this->db->update("company", $data);
    }

    public function getSkillCompany($id)
    {
        $this->db->where('project_skill.id_project', $id);
        return $this->db->get("project_skill")->row();
    }

    public function getSkillById($id)
    {
        $this->db->select('skill.*');
        $this->db->where('id_skill', $id);
        return $this->db->get("skill")->result();
    }

    public function getSkill()
    {
        $this->db->select('skill.*');
        return $this->db->get("skill")->result();
    }

    public function getProjectDetail($id)
    {
        $this->db->select('project.*');
        $this->db->where('project.id_project', $id);
        return $this->db->get("project")->row();
    }

    public function GetProjectSkill($id_talent)
    {
        $this->db->where('project_skill.id_project', $id_talent);
        return $this->db->get("project_skill")->result();
    }

    public function InsertProject($data)
    {
        return $this->db->insert('project', $data);
    }

    public function UpdateProject($id, $data)
    {
        $this->db->where('id_project', $id);
        return $this->db->update('project', $data);
    }

    public function InsertProjectSkill($data)
    {
        return $this->db->insert('project_skill', $data);
    }

    public function UpdateProjectSkill($id, $data)
    {
        $this->db->where('id_project', $id);
        return $this->db->update('project_skill', $data);
    }

    public function DeleteProjectSkill($id)
    {
        $this->db->where('id_project', $id);
        return $this->db->delete('project_skill');
    }
    
    public function getAllApplicant($projectID)
    {
        $this->db->select('talent.*, detail_project.id_detail_project, detail_project.id_project, detail_project.status, talent_skill.id_skill');
        $this->db->join('talent', 'talent.id_talent = detail_project.id_talent', 'LEFT');
        $this->db->join('talent_skill', 'talent_skill.id_talent = detail_project.id_talent', 'LEFT');
        $this->db->where('detail_project.id_project', $projectID);
        return $this->db->get("detail_project")->result();
    }

    public function getApplicantById($talentID)
    {
        $this->db->select('talent.*, talent_skill.id_skill');
        $this->db->join('talent_skill', 'talent_skill.id_talent = talent.id_talent', 'LEFT');
        $this->db->where('talent.id_talent', $talentID);
        return $this->db->get("talent")->row();
    }

    public function UpdateApplicant($id, $data)
    {
        $this->db->where('id_detail_project', $id);
        return $this->db->update('detail_project', $data);        
    }
}
