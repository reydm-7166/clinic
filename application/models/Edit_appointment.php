<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Edit_appointment extends CI_Model {
        public function get_data($id){
            return $this->db->query('SELECT * FROM appointments WHERE id=(?)', $id)->result_array();
        }

         public function update_data($updated_form){
             $query = "UPDATE appointments 
                        SET customers_info_id = (?), treatments_id = (?), patient_firstname = (?),
                         patient_lastname = (?), patient_email= (?), appointment_date = (?) WHERE id = (?)";

            $data = array($updated_form['customer_id'], $updated_form['edit_category'], $updated_form['edit_firstname'], $updated_form['edit_lastname'], 
                    $updated_form['edit_email'], $updated_form['edit_date'], $updated_form['id']);
            return $this->db->query($query, $data);
        }

    }
