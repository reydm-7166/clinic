<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Signup extends CI_Model {
        function check_register($form){
            $query = "INSERT INTO customer_infos (first_name, last_name, contact_number, email_address, password) VALUES(?,?,?,?,?)";
            $data = array($form['fname'], $form['lname'], $form['number'],
            $form['email'], $form['pass']);
            
            return $this->db->query($query, $data);
        }
    }