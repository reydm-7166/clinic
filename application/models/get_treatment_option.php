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

        public function get_all_treatments(){
            return $this->db->query("SELECT *, treatments.id AS treatments_id FROM treatments 
                                    INNER JOIN treatment_categories ON treatment_categories.id = treatments.treatments_category_id
                                    WHERE treatments.treatments_category_id = 1
                                    ORDER BY treatment_name ASC")->result_array();
        }

        public function get_all_services(){
            return $this->db->query("SELECT *, treatments.id AS treatments_id FROM treatments 
                                    INNER JOIN treatment_categories ON treatment_categories.id = treatments.treatments_category_id
                                    WHERE treatments.treatments_category_id = 2
                                    ORDER BY treatment_name ASC")->result_array();
        }

        public function edit($id){
            return $this->db->query("SELECT *, treatments.id AS treatments_id FROM treatments 
                                    INNER JOIN treatment_categories ON treatment_categories.id = treatments.treatments_category_id
                                    WHERE treatments.id = (?)", $id)->result_array();
        }
        public function edit_treatments($data){
                $query = "UPDATE treatments SET treatment_name = (?), treatment_cost = (?), treatment_image = (?) WHERE id = (?)";
                $data = array($data['edit_treatmentsname'], $data['edit_treatmentscost'], $data['file_name'], $data['id']);
                
                return $this->db->query($query, $data);
        }
        public function delete($id){
            return $this->db->query("DELETE FROM treatments WHERE id = (?)", $id);
        }

        public function add($data){
            $query = "INSERT INTO treatments (`treatments_category_id`, `treatment_name`, `treatment_cost`, `treatment_image`) VALUES (?,?,?,?)";
            $data = array($data['category'], $data['name'], $data['cost'], $data['file_name']);
            
            return $this->db->query($query, $data);
        }

        /*
        *   This models are straigtforward from their method names.
        *
        */
    }