<?php 
    class Authentication extends CI_Model {
        function check_register($form){
            $query = "INSERT INTO login (first_name, last_name, contact_number, email, password) VALUES(?,?,?,?,?)";
            $data = array($form['fname'], $form['lname'], $form['number'],
            $form['email'], $form['pass']);
            return $this->db->query($query, $data);
        }
        public function check_login($credentials){
            
            return $this->db->query("SELECT * FROM login WHERE (contact_number = ? || email= ?) AND password = ?", 
                                    array($credentials['username'], $credentials['username'], $credentials['password']))->row_array();
            
        }
    }
