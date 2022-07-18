<?php
    class M_Talent extends CI_Model{       
        
        function __construct()
        {
            parent::__construct();
            $this->db->query('SET FOREIGN_KEY_CHECKS = 0');
        }
        
        public function getProject()
        {
            $this->db->select('company.*, project.id_project, project.nama_project, project.deskripsi_project, project.salary');
            $this->db->join('company', 'company.id_company = project.id_company', 'LEFT OUTER');
            return $this->db->get("project")->result();
        }

        public function getSkillCompany($id)
        {
            $this->db->where('project_skill.id_project', $id);
            return $this->db->get("project_skill")->row();
        }

        public function getProjectDetail($id, $id_talent)
        {
            $this->db->select('project.*, detail_project.status');
            $this->db->join('detail_project', 'detail_project.id_project = project.id_project');
            $this->db->where('project.id_project', $id);
            $this->db->where('detail_project.id_talent', $id_talent);
            return $this->db->get("project")->row();
        }

        public function getSkillTalent($id)
        {
            $this->db->where('talent_skill.id_talent', $id);
            return $this->db->get("talent_skill")->row();
        }

        public function getCompanyDetail($id)
        {
            $this->db->select('company.*');
            $this->db->where('company.id_company', $id);
            return $this->db->get("company")->row();
        }

        public function getSkill()
        {
            $this->db->select('skill.*');
            return $this->db->get("skill")->result();
        }

        public function getTalentProfile()
        {
            $this->db->select('talent.*');
            $this->db->join('talent_skill', 'talent_skill.id_talent = talent.id_talent', 'LEFT OUTER');
            return $this->db->get("talent")->row();
        }

        public function GetTalentSkill($id)
        {
            $this->db->where('talent_skill.id_talent', $id);
            return $this->db->get("talent_skill")->result();
        }

        public function getSkillById($id)
        {
            $this->db->select('skill.*');
            $this->db->where('id_skill', $id);
            return $this->db->get("skill")->result();
        }
        
        public function UpdateTalent($id, $data)
        {
            $this->db->where('talent.id_talent', $id);
            return $this->db->update("talent", $data);
        }

        public function InsertTalentSkill($data)
        {
            return $this->db->insert('talent_skill', $data);
        }

        public function DeleteTalentSkill($id)
        {
            $this->db->where('id_talent', $id);
            return $this->db->delete('talent_skill');
        }

        public function InsertApply($data)
        {
            return $this->db->insert('detail_project', $data);    
        }
    }
?>