<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_history extends CI_Model {

        public function get_all($id){
            return $this->db->query("SELECT * FROM appointments_backup WHERE customers_info_id = (?)", array($id))->result_array();
        }

        public function appointment_count($id){
            return $this->db->query("SELECT COUNT(customers_info_id) AS total FROM appointments_backup WHERE customers_info_id = (?)", array($id))->row_array();
        }
    }
