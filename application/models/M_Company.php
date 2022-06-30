<?php
    class M_Company extends CI_Model{       

        public function getCompany()
        {
            $this->db->select('company.*, project.id_project, project.nama_project, project.deskripsi_project');
            $this->db->join('project', 'company.id_company = project.id_company', 'LEFT OUTER');
            return $this->db->get("company")->result();
        }

        public function getTalentCompany($id)
        {
            $this->db->select('skill.*');
            $this->db->join('project_skill', 'skill.id_skill = project_skill.id_skill', 'LEFT OUTER');
            $this->db->where('project_skill.id_project', $id);
            return $this->db->get("skill")->result();
        }
    }
?>