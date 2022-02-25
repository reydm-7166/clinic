<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class get_treatment_option extends CI_Model {
        public function get_all(){
            return $this->db->query("SELECT * FROM treatments")->result_array();
        }

        public function get_all_manage(){
            return $this->db->query("SELECT *, treatments.id AS treatments_id FROM treatments 
                                    INNER JOIN treatment_categories ON treatment_categories.id = treatments.treatments_category_id")->result_array();
        }


    }