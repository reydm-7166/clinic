<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_history extends CI_Model {

        public function get_all($id){
            return $this->db->query("SELECT * FROM appointments_backup WHERE customers_info_id = (?)", array($id))->result_array();
        }

        public function appointment_count($id){
            return $this->db->query("SELECT COUNT(appointments_backup.customers_info_id) AS total, CONCAT(customer_infos.first_name, ' ', customer_infos.last_name) AS name,
            customer_infos.id FROM appointments_backup 
            INNER JOIN customer_infos ON appointments_backup.customers_info_id = customer_infos.id
            WHERE customers_info_id = (?)", array($id))->row_array();
        }
    }
