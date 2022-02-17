<?php 

    class Signin extends CI_Model {

        public function check_login($credentials){
            return $this->db->query("SELECT * FROM customer_infos WHERE (contact_number = ? || email_address= ?) AND password = ?", 
                                    array($credentials['username'], $credentials['username'], $credentials['password']))->row_array();
        }

    }