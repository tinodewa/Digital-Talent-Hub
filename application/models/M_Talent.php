<?php
    class M_Talent extends CI_Model{       
        
        public function getProject()
        {
            $this->db->select('company.*, project.id_project, project.nama_project, project.deskripsi_project, project.salary');
            $this->db->join('company', 'company.id_company = project.id_company', 'LEFT OUTER');
            return $this->db->get("project")->result();
        }

        public function getSkillCompany($id)
        {
            $this->db->select('skill.*');
            $this->db->join('project_skill', 'skill.id_skill = project_skill.id_skill', 'LEFT OUTER');
            $this->db->where('project_skill.id_project', $id);
            return $this->db->get("skill")->result();
        }

        public function getSkill()
        {
            $this->db->select('skill.*');
            return $this->db->get("skill")->result();
        }
    }
?>