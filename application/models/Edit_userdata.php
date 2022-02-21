<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Edit_userdata extends CI_Model {
        public function get_data($id){
            return $this->db->query('SELECT * FROM customer_infos WHERE id=(?)', $id)->result_array();
        }

         public function update_user($updated_form){
             $query = "UPDATE customer_infos SET first_name = (?), last_name = (?), email_address =(?),
                        contact_number = (?), password = (?) 
                        WHERE id = (?)";

            $data = array($updated_form['edit_firstname'], $updated_form['edit_lastname'], $updated_form['edit_email'], 
                    $updated_form['edit_number'], md5($updated_form['edit_password']), $updated_form['id']);

            return $this->db->query($query, $data);
            
        }
    }