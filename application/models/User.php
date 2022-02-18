<?php 

    class User extends CI_Model {

        public function get_all_data(){
            return $this->db->query("SELECT `id`, `first_name`, `last_name`, `email_address`, `contact_number` FROM `customer_infos`")->result_array();
        }
        
    }