<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Edit_userdata extends CI_Model {
        public function get_data($id){
            return $this->db->query('SELECT * FROM appointments WHERE id=(?)', $id)->result_array();
        }
    }