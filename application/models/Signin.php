<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Signin extends CI_Model {

        public function check_login($credentials){
            return $this->db->query("SELECT * FROM customer_infos WHERE (contact_number = ? || email_address= ?) AND password = ?", 
                                    array($credentials['username'], $credentials['username'], $credentials['password']))->row_array();
        }

        public function check_login_admin($credentials){

            return $this->db->query("SELECT * FROM admin_account WHERE username = ?  AND password = ?", 
                                    array($credentials['username'], $credentials['password']))->row_array();
        }
    }