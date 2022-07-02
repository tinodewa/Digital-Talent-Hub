<?php
    class M_Main extends CI_Model{       

        function check_login($table, $data){
            $this->db->where($data);
            $query = $this->db->get($table);
            if ($query->num_rows() == 0) {
                return FALSE;
            } else {
                return $query->row();
            }
        }
    }
?>